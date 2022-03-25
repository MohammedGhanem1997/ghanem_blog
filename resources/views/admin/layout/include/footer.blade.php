
		<!-- JQuery js-->


<script src= {{ asset('js/jquery-3.2.1.min.js') }}></script>


		<!-- Bootstrap js -->
		<script src={{ asset('plugins/bootstrap-4.3.1/js/popper.min.js') }}></script>
		<script src={{ asset('plugins/bootstrap-4.3.1/js/bootstrap.min.js') }}></script>

		<!--JQuery Sparkline Js-->
		<script src={{ asset('js/jquery.sparkline.min.js') }}></script>

		<!-- Circle Progress Js-->
		<script src={{ asset('js/circle-progress.min.js') }}></script>

		<!-- Star Rating Js-->
		<script src={{ asset('plugins/rating/jquery.rating-stars.js') }}></script>

        <!-- Fullside-menu Js-->
        <script src={{ asset('plugins/sidemenu/sidemenu.js') }}></script>

		<!-- Custom scroll bar Js-->
		<script src={{ asset('plugins/pscrollbar/pscrollbar.js') }}></script>
		<script src={{ asset('plugins/pscrollbar/pscroll.js') }}></script>


<!-- Form wizard js -->
<script src={{ asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}></script>
<script src={{ asset('plugins/jquery-validation/dist/jquery.validate.min.js')}}></script>
<script src={{ asset('js/wizard.js')}}></script>

		<!--Counters -->
		<script src={{ asset('plugins/counters/counterup.min.js') }}></script>
		<script src={{ asset('plugins/counters/waypoints.min.js') }}></script>

		<!-- Custom Js-->
		<script src={{ asset('js/admin-custom.js') }}></script>

      <script src={{ asset('plugins/fileuploads/js/fileupload.js')}}></script>

	  <!-- WYSIWYG Editor js -->
		<script src={{ asset('plugins/wysiwyag/jquery.richtext.js')}}></script>
		<script src={{ asset('js/formeditor.js')}}></script>

        <!-- Data tables -->
{{--        <script src={{ asset('plugins/datatable/jquery.dataTables.min.js')}}></script>--}}
{{--        <script src={{ asset('plugins/datatable/dataTables.bootstrap4.min.js')}}></script>--}}

        <script src={{ asset('js/tabs.js')}}></script>
        <script src={{ asset('js/CKEditor.js')}}></script>
        <script src={{ asset('js/image-upload.js')}}></script>
        <script src={{ asset('js/sidebar.js')}}></script>

        <!--Select2 js -->
        <script src={{ asset('plugins/select2/select2.full.min.js')}}></script>

        <!-- Inline js -->
        <script src={{ asset('js/select2.js')}}></script>
        <script src={{ asset('js/formelements.js')}}></script>
        <script src={{ asset('js/latLong.js')}}></script>
        <script src={{ asset('js/permission.js')}}></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js" integrity="sha512-d5Jr3NflEZmFDdFHZtxeJtBzk0eB+kkRXWFQqEc1EKmolXjHm2IKCA7kTvXBNjIYzjXfD5XzIjaaErpkZHCkBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.js"></script>

        <script src={{ asset('js/print.js')}}></script>

{{--firebase--}}
        <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
        <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
        <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-analytics.js"></script>
        <!-- Add Firebase products that you want to use -->
        <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-storage.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>


        <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

        <script src={{ asset('js/firebase/init.js')}}></script>
        <script src={{ asset('js/firebase/emailverification.js')}}></script>
        <script src={{ asset('js/firebase/phoneverification.js')}}></script>

        <script src={{ asset('js/permiddion.js')}}></script>
        <script src={{ asset('js/custom/phone_code.js')}}></script>
        <script src={{ asset('js/custom/map.js')}}></script>

{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
        <script src={{ asset('plugins/tabs/jquery.multipurpose_tabcontent.js')}}></script>
        <script src={{ asset('js/tabs.js')}}></script>
        <script src={{ asset('js/Select_Group.js')}}></script>



        <script src="{{asset('js/nestable.js')}}"></script>
        <script>

            $(document).ready(function()
            {

                var updateOutput = function(e)
                {
                    var list   = e.length ? e : $(e.target),
                        output = list.data('output');
                    if (window.JSON) {
                        output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    } else {
                        output.val('JSON browser support required for this demo.');
                    }
                };

                // activate Nestable for list 1
                $('#nestable').nestable({
                    group: 1
                })
                    .on('change', updateOutput);

                // activate Nestable for list 2
                $('#nestable2').nestable({
                    group: 1
                })
                    .on('change', updateOutput);

                // output initial serialised data
                updateOutput($('#nestable').data('output', $('#nestable-output')));
                updateOutput($('#nestable2').data('output', $('#nestable2-output')));

                alert(updateOutput);


                $('#nestable-menu').on('click', function(e)
                {
                    var target = $(e.target),
                        action = target.data('action');
                    if (action === 'expand-all') {
                        $('.dd').nestable('expandAll');
                    }
                    if (action === 'collapse-all') {
                        $('.dd').nestable('collapseAll');
                    }
                });

                $('#nestable3').nestable();

            });
        </script>

{{--        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>--}}

{{--        <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>--}}

{{--        <script src={{ asset('js/datatable.js')}}></script>--}}

        </body>

</html>
