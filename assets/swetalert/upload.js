const flashData= $('.flashdata').data('flashdata');
if(flashdata){
    Swal.fire({
        title:'Data acara' ,
        tex : 'Berhasil'+ flashdata,
        type : 'success'

    })
}