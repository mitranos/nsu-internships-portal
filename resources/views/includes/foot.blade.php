<!--Scripts are placed at the end so that page loads faster-->
<script src="../../js/jquery-1.10.2.js"></script>
<script src="../../js/loginscript.js"></script>


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