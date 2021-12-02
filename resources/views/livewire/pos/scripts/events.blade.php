<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livwire.on('scan-ok', Msg => {
            noty(Msg)
        })
        window.livwire.on('scan-notfound', Msg => {
            noty(Msg, 2)
        })
        window.livwire.on('no-stock', Msg => {
            noty(Msg, 2)
        })
        window.livwire.on('sale-error', Msg => {
            noty(Msg)
        })
        window.livwire.on('print-ticket', saleId => {
            window.open("print://" + saleId, '_blank')
        })

    })
</script>