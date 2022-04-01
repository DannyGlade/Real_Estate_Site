$(document).ready(function () {
    $("#data").DataTable({
        lengthMenu: [
            [10, 20, 30, -1],
            [10, 20, 30, "All"],
        ],
        order: [
            [0, "desc"]
        ]
    });
});
