<!--Scripts are placed at the end so that page loads faster-->
<script type="text/javascript" src="{{ url("/js/jquery-1.10.2.js") }}"></script>
<script type="text/javascript" src="{{ url("/js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ url("/js/fileinput.min.js") }}"></script>

<script>

    $("#account-tab").on('click', function () {
        $('#menuTabs li').removeClass('active');
    });

    /* ----------------------------------------------------------- */
    /*  BOOTSTRAP ACCORDION-1
     /* ----------------------------------------------------------- */

    $('#accordion_1 .panel-collapse').on('shown.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-plus-square").addClass("fa-minus-square");
    });

    //The reverse of the above on hidden event:

    $('#accordion_1 .panel-collapse').on('hidden.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-minus-square").addClass("fa-plus-square");
    });

    /* ----------------------------------------------------------- */
    /*  BOOTSTRAP ACCORDION-2
     /* ----------------------------------------------------------- */

    $('#accordion_2 .panel-collapse').on('shown.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-plus-square").addClass("fa-minus-square");
    });

    //The reverse of the above on hidden event:

    $('#accordion_2 .panel-collapse').on('hidden.bs.collapse', function () {
        $(this).prev().find(".fa").removeClass("fa-minus-square").addClass("fa-plus-square");
    });

</script>