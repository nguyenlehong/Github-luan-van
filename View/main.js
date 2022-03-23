function hienthi(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image').attr('src', e.target.result);
        }
        reader.readAsDataURL(fileInput.files[0]);

    }
}

function thongbaothemloaimon() {
    var tenloai = document.getElementsByClassName('tenloaimon');
    alert("Thêm thành công" + tenloai);
}

function deleteLM() {
    alert("Đã xóa thành công!");
}

function insertLM() {
    alert("Đã thêm thành công!");
}