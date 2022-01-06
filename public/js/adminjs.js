$(document).ready(function () {
    $("#data").DataTable({
        lengthMenu: [
            [5, 10, 15, 20, -1],
            [5, 10, 15, 20, "All"],
        ],
    });
});
