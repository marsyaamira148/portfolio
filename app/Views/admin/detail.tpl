<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$post.title|escape}</title>
    <link rel="stylesheet" href="{$base_url}path/to/your/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$base_url}path/to/your/css/fontawesome.min.css">
    <style>
        body { background-color: #fff8f0; font-family: 'Poppins', sans-serif; }
        .post-container { max-width: 900px; margin: 50px auto; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);}
        .post-title { font-size: 2rem; font-weight: 600; margin-bottom: 20px; }
        .post-image { border-radius: 10px; width: 100%; height: auto; margin-bottom: 20px; }
        .post-meta { font-size: 0.9rem; color: #777; margin-bottom: 30px; display: flex; gap: 15px; flex-wrap: wrap; align-items: center; }
        .post-meta span, .post-meta a { color: #555; text-decoration: none; }
        .post-meta a:hover { text-decoration: underline; }
        .post-content p { line-height: 1.8; margin-bottom: 1rem; }
       
    </style>
</head>
<body>
    <div class="container post-container">
        <!-- Judul -->
        <h1 class="post-title">{$post.title|escape}</h1>

        <!-- Gambar -->
        {if $post.image != ""}
            <img src="{$base_url}uploads/{$post.image}" alt="{$post.title|escape}" class="post-image">
        {/if}

        <!-- Meta info -->
      <div class="post-meta">
    <span>📅 {$post.created_at|date_format:"%d %b %Y"}</span>
    <span>✍ {$post.author|escape}</span>
</div>


        <!-- Konten lengkap -->
        <div class="post-content">
            {$post.description nofilter}
        </div>
    </div>

    <script src="{$base_url}path/to/your/js/bootstrap.bundle.min.js"></script>
</body>
</html>
