$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id,url){
    if(confirm('chắc chắn xóa!')){
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data: {id},
            url: url,
            success: function(result){
                if(result.error ===false){
                    alert(result.message);
                    location.reload();

                }else{
                    alert('Xoá lỗi');   
                }
            }
        })
    }
}

// Upload file
$('#upload').change(function(){
    const form = new FormData();
    form.append('file', $(this)[0].files[0]); // Sửa 'file' thành 'files'

    $.ajax({
        url: '/shop/public/admin/products/products/upload/services',
        type: 'POST', // 'Type' -> 'type' (viết thường)
        data: form,
        processData: false,
        contentType: false,
        dataType: 'json', // JSON nên dùng chữ thường
        success: function(results){
            console.log(results);
        },
        error: function(xhr, status, error) {
            console.error("Lỗi:", error);
        }
    });
});
