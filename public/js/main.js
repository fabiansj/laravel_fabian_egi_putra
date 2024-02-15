console.log("sukses ke public js main js jquery");

//masih gagal ajax
var deleteRS = function(id){
    $.ajax({
        type: "DELETE",
        url: "{{ route('deleteRS', ['id' => ':id']) }}".replace(':id', id),
        dataType: 'json',
        succes: function(response){
            alert(response.message);
            window.location.href = "{{ route('dashboard') }}";
        },
        error: function(xhr, status, error) {
            alert("Failed to delete data: " + error);
            console.error(xhr.responseText); // Tambahkan ini untuk melihat respons lengkap dari server
        }
    })
}
