<script>
$('.tblscroll').nicescroll(
    {
        cursorcolor:"#515365",
        cursorwidth:"30px",
        background:rgba"(20,20,20,0.3)",
        cursorborder:"opx",
        cursorborderradius:3
    }
)

function Confirm(id, eventName, text,name,products) {
        if (products > 0) {
            swal.fire({
                title: 'PRECAUCION',
                icon: 'warning',
                text: text
            })
            return;
        }
        swal.fire({
            title: 'CONFIRMAR',
            icon: 'warning',
            text: text,
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#383838',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'
        }).then(function(result) {
            if (result.value) {
                window.livewire.emit(eventName, id)
                Swal.close()
            }
        })
    }

</script>