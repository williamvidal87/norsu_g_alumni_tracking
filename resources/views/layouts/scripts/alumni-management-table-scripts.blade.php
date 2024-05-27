<script >
    document.addEventListener('livewire:init', () => {
        $("#data-table").DataTable({
            autoWidth: !1,
            responsive: !0,
            lengthMenu: [[15, 30, 45, -1], ["15 Rows", "30 Rows", "45 Rows", "Everything"]],
            language: {
                searchPlaceholder: "Search for records..."
            },
            sDom: '<"dataTables__top"flB<"dataTables_actions">>rt<"dataTables__bottom"ip><"clear">',
            buttons: [{
                extend: "excelHtml5",
                title: "Export Data"
            }, {
                extend: "csvHtml5",
                title: "Export Data"
            }, {
                extend: "print",
                title: "NORSU-G ALUMNI"
            }],
            initComplete: function() {
                $(".dataTables_actions").html('<i class="zwicon-more-h" data-toggle="dropdown" /><div class="dropdown-menu dropdown-menu-right"><a data-table-action="print" class="dropdown-item">Print</a><a data-table-action="fullscreen" class="dropdown-item">Fullscreen</a><div class="dropdown-divider" /><div class="dropdown-header border-bottom-0 pt-0"><small>Download as</small></div><a data-table-action="excel" class="dropdown-item">Excel (.xlsx)</a><a data-table-action="csv" class="dropdown-item">CSV (.csv)</a></div>')
            }
        });
            
        //start restrict multi click
        function submitPoll() {
            $('button').prop('disabled', true);
        }
        for (let index = 0; index < document.getElementsByClassName("btn").length; index++) {
            document.getElementsByClassName("btn")[index].addEventListener("click", submitPoll);
        }
        //end restrict multi click

    });
    
    document.addEventListener('livewire:initialized', () => {
        
        @this.on('OpenAlumniModal', (event) => {
            $('#AlumniModal').modal('show');
        });
        
        @this.on('CloseAlumniModal', (event) => {
            $('#AlumniModal').modal('hide');
        });

        @this.on('DispatchTable', (event) => {
            $('button').prop('disabled', false);
            setTimeout(function() {
                $('#data-table').DataTable().destroy();
                $("#data-table").DataTable({
                    autoWidth: !1,
                    responsive: !0,
                    lengthMenu: [[15, 30, 45, -1], ["15 Rows", "30 Rows", "45 Rows", "Everything"]],
                    language: {
                        searchPlaceholder: "Search for records..."
                    },
                    sDom: '<"dataTables__top"flB<"dataTables_actions">>rt<"dataTables__bottom"ip><"clear">',
                    buttons: [{
                        extend: "excelHtml5",
                        title: "Export Data"
                    }, {
                        extend: "csvHtml5",
                        title: "Export Data"
                    }, {
                        extend: "print",
                        title: "NORSU-G ALUMNI"
                    }],
                    initComplete: function() {
                        $(".dataTables_actions").html('<i class="zwicon-more-h" data-toggle="dropdown" /><div class="dropdown-menu dropdown-menu-right"><a data-table-action="print" class="dropdown-item">Print</a><a data-table-action="fullscreen" class="dropdown-item">Fullscreen</a><div class="dropdown-divider" /><div class="dropdown-header border-bottom-0 pt-0"><small>Download as</small></div><a data-table-action="excel" class="dropdown-item">Excel (.xlsx)</a><a data-table-action="csv" class="dropdown-item">CSV (.csv)</a></div>')
                    }
                });
            }, 0);
        });
        
        @this.on('ConfirmDelete', (AlumniID) => {
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('DeleteThis',AlumniID),
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
            }
            });
        });
        
    });
</script>
