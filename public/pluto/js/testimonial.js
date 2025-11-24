document.addEventListener("DOMContentLoaded", function () {

    // APPROVE
    document.querySelectorAll(".btn-approve").forEach(btn => {
        btn.addEventListener("click", function () {

            const id = this.dataset.id;
            const row = document.getElementById("row-" + id);

            fetch(base_url + "admin/testimonial/approve/" + id, {
                method: "POST",
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    row.style.transition = "0.3s";
                    row.style.opacity = "0";
                    setTimeout(() => row.remove(), 300);
                }
            });
        });
    });

    // REJECT
    document.querySelectorAll(".btn-reject").forEach(btn => {
        btn.addEventListener("click", function () {

            if (!confirm("Tolak testimonial ini?")) return;

            const id = this.dataset.id;
            const row = document.getElementById("row-" + id);

            fetch(base_url + "admin/testimonial/reject/" + id, {
                method: "POST",
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    row.style.transition = "0.3s";
                    row.style.opacity = "0";
                    setTimeout(() => row.remove(), 300);
                }
            });
        });
    });

});
