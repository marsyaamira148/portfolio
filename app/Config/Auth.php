<?php declare(strict_types=1);

/**
 * This file is part of CodeIgniter Shield.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Config;

use CodeIgniter\Shield\Config\Auth as ShieldAuth;
use CodeIgniter\Shield\Authentication\Actions\ActionInterface;
use CodeIgniter\Shield\Authentication\AuthenticatorInterface;
use CodeIgniter\Shield\Authentication\Authenticators\AccessTokens;
use CodeIgniter\Shield\Authentication\Authenticators\HmacSha256;
use CodeIgniter\Shield\Authentication\Authenticators\JWT;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use CodeIgniter\Shield\Authentication\Passwords\CompositionValidator;
use CodeIgniter\Shield\Authentication\Passwords\DictionaryValidator;
use CodeIgniter\Shield\Authentication\Passwords\NothingPersonalValidator;
use CodeIgniter\Shield\Authentication\Passwords\PwnedValidator;
use CodeIgniter\Shield\Authentication\Passwords\ValidatorInterface;
use CodeIgniter\Shield\Models\UserModel;

class Auth extends ShieldAuth
{
    // --------------------------------------------------------------------
    // Constants for Record Login Attempts
    // --------------------------------------------------------------------
    public const RECORD_LOGIN_ATTEMPT_NONE    = 0; // Do not record at all
    public const RECORD_LOGIN_ATTEMPT_FAILURE = 1; // Record only failures
    public const RECORD_LOGIN_ATTEMPT_ALL     = 2; // Record all login attempts

    // --------------------------------------------------------------------
    // View files
    // --------------------------------------------------------------------
    public array $views = [
        'login'                     => '\CodeIgniter\Shield\Views\login',
        'register'                  => '\CodeIgniter\Shield\Views\register',
        'layout'                    => '\CodeIgniter\Shield\Views\layout',
        'action_email_2fa'          => '\CodeIgniter\Shield\Views\email_2fa_show',
        'action_email_2fa_verify'   => '\CodeIgniter\Shield\Views\email_2fa_verify',
        'action_email_2fa_email'    => '\CodeIgniter\Shield\Views\Email\email_2fa_email',
        'action_email_activate_show'=> '\CodeIgniter\Shield\Views\email_activate_show',
        'action_email_activate_email'=> '\CodeIgniter\Shield\Views\Email\email_activate_email',
        'magic-link-login'          => '\CodeIgniter\Shield\Views\magic_link_form',
        'magic-link-message'        => '\CodeIgniter\Shield\Views\magic_link_message',
        'magic-link-email'          => '\CodeIgniter\Shield\Views\Email\magic_link_email',
    ];

    // --------------------------------------------------------------------
    // Redirect URLs
    // --------------------------------------------------------------------
    public array $redirects = [
        'register'          => 'admin',
        'login'             => 'admin',
        'logout'            => 'login',
        'force_reset'       => '/',
        'permission_denied' => '/',
        'group_denied'      => '/',
    ];

    // --------------------------------------------------------------------
    // Authentication Actions
    // --------------------------------------------------------------------
    public array $actions = [
        'register' => null,
        'login'    => null,
    ];

    // --------------------------------------------------------------------
    // Authenticators
    // --------------------------------------------------------------------
    public array $authenticators = [
        'tokens'  => AccessTokens::class,
        'session' => Session::class,
        'hmac'    => HmacSha256::class,
        // 'jwt' => JWT::class,
    ];

    // Default Authenticator
    public string $defaultAuthenticator = 'session';

    // Authentication Chain
    public array $authenticationChain = [
        'session',
        'tokens',
        'hmac',
        // 'jwt',
    ];

    // --------------------------------------------------------------------
    // Allow Registration
    // --------------------------------------------------------------------
    public bool $allowRegistration = true;

    // Record Last Active Date
    public bool $recordActiveDate = true;

    // Allow Magic Link Logins
    public bool $allowMagicLinkLogins = true;

    // Magic Link Lifetime
    public int $magicLinkLifetime = HOUR;

    // --------------------------------------------------------------------
    // Session Authenticator Configuration
    // --------------------------------------------------------------------
    public array $sessionConfig = [
        'field'             => 'user',
        'allowRemembering'  => true,
        'rememberCookieName'=> 'remember',
        'rememberLength'    => 30 * DAY,
    ];

    // --------------------------------------------------------------------
    // Validation Rules
    // --------------------------------------------------------------------
    public array $usernameValidationRules = [
        'label' => 'Auth.username',
        'rules' => [
            'required',
            'max_length[30]',
            'min_length[3]',
            'regex_match[/\A[a-zA-Z0-9\.]+\z/]',
        ],
    ];

    public array $emailValidationRules = [
        'label' => 'Auth.email',
        'rules' => [
            'required',
            'max_length[254]',
            'valid_email',
        ],
    ];

    public int $minimumPasswordLength = 8;

    public array $passwordValidators = [
        CompositionValidator::class,
        NothingPersonalValidator::class,
        DictionaryValidator::class,
        // PwnedValidator::class,
    ];

    public array $validFields = [
        'email',
        // 'username',
    ];

    public array $personalFields = [];

    public int $maxSimilarity = 50;

    // --------------------------------------------------------------------
    // Hashing
    // --------------------------------------------------------------------
    public string $hashAlgorithm = PASSWORD_DEFAULT;

    public int $hashMemoryCost = 65536;
    public int $hashTimeCost   = 4;
    public int $hashThreads    = 1;
    public int $hashCost       = 12;

    // --------------------------------------------------------------------
    // Other Settings
    // --------------------------------------------------------------------
    public ?string $DBGroup = null;

    public array $tables = [
        'users'            => 'users',
        'identities'       => 'auth_identities',
        'logins'           => 'auth_logins',
        'token_logins'     => 'auth_token_logins',
        'remember_tokens'  => 'auth_remember_tokens',
        'groups_users'     => 'auth_groups_users',
        'permissions_users'=> 'auth_permissions_users',
    ];

    public string $userProvider = UserModel::class;

    // --------------------------------------------------------------------
    // Redirect Methods
    // --------------------------------------------------------------------
    public function loginRedirect(): string
    {
        $session = session();
        $url = $session->getTempdata('beforeLoginUrl') ?? setting('Auth.redirects')['login'];
        return $this->getUrl($url);
    }

    public function logoutRedirect(): string
    {
        return $this->getUrl(setting('Auth.redirects')['logout']);
    }

    public function registerRedirect(): string
    {
        return $this->getUrl(setting('Auth.redirects')['register']);
    }

    public function forcePasswordResetRedirect(): string
    {
        return $this->getUrl(setting('Auth.redirects')['force_reset']);
    }

    public function permissionDeniedRedirect(): string
    {
        return $this->getUrl(setting('Auth.redirects')['permission_denied']);
    }

    public function groupDeniedRedirect(): string
    {
        return $this->getUrl(setting('Auth.redirects')['group_denied']);
    }

    protected function getUrl(string $url): string
    {
        return match (true) {
            str_starts_with($url, 'http://') || str_starts_with($url, 'https://') => $url,
            route_to($url) !== false => rtrim(url_to($url), '/ '),
            default => rtrim(site_url($url), '/ '),
        };
    }
}
