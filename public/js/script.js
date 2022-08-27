const confirmDelete = () => {
    addEventListener("submit", (e) => {
        var form = document.querySelector("#form1");
        e.preventDefault();

        Swal.fire({
            title: "Ingin menghapus postingan ini?",
            text: "postingan anda akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            } 
        });
    });
};
