@include('layouts.base')

    @include('layouts.header')

    @include('accueil')

    <main id="main">

        @include('about')

        @include('prestation')
        
        @include('tarifs')
        
        @include('horaires')

        @include('contact')
      </main>

    <!--==========================
      Footer
    ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
              &copy; Copyright <strong>Adapt' Aqua</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="js/regna/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/regna/main.js"></script>
    
    <!-- Moment JS -->
    <script src="js/moment/moment.js"></script>
    
    <!-- Libraire FullCalendar -->
    <link rel='stylesheet' href='css/fullcalendar/fullcalendar.css' />
    <script src="js/fullcalendar/fullcalendar.js"></script>
    <script src="js/fullcalendar/fr.js"></script>
  
    <!-- Personal script -->
    <script type="text/javascript">
        $('.calling_modalCoursAqua').on('click', function(){$('#modalCoursAqua').modal('show')});
        $('.calling_modalCoursCollectif').on('click', function(){$('#modalCoursCollectif').modal('show')});
        $('.calling_modalHydromassage').on('click', function(){$('#modalHydromassage').modal('show')});
        
        const scheduler_aquatique = [{
                title: 'Aquatique',
                dow: [1,2,3,4],
                start: '09:00',
                end: '10:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [5],
                start: '08:30',
                end: '09:30',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [1,2,3,4],
                start: '10:00',
                end: '11:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [5],
                start: '09:30',
                end: '10:30',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [1,2,3,4],
                start: '11:00',
                end: '12:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [5],
                start: '10:30',
                end: '11:30',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [1,2,3],
                start: '14:00',
                end: '15:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [5],
                start: '14:30',
                end: '15:30',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [2],
                start: '15:00',
                end: '16:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [3,4],
                start: '17:00',
                end: '18:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [1,2,5],
                start: '17:30',
                end: '18:30',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [3,4],
                start: '18:00',
                end: '19:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [1,2,5],
                start: '18:30',
                end: '19:30',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [3,4],
                start: '19:00',
                end: '20:00',
                color: '#45a89e'
            },{
                title: 'Aquatique',
                dow: [2],
                start: '19:30',
                end: '20:30',
                color: '#45a89e'
            }];
        const scheduler_espace_detente = [{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '10:00',
                    end: '11:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '11:00',
                    end: '12:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '14:00',
                    end: '15:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '15:00',
                    end: '16:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '16:00',
                    end: '17:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '17:00',
                    end: '18:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '18:00',
                    end: '19:00',
                    color: '#dda66e'
                },{
                    title: 'Espace détente',
                    dow: [1,2,3,4,5],
                    start: '19:00',
                    end: '20:00',
                    color: '#dda66e'
                }];
        const scheduler_aquaphobie = [{
                title: 'Cours de natation / Aquaphobie',
                dow: [1,2,3,4,5],
                start: '15:00',
                end: '16:00',
                color: '#f5a9a9'
            },{
                title: 'Cours de natation / Aquaphobie',
                dow: [1,2,3,4,5],
                start: '16:00',
                end: '17:00',
                color: '#f5a9a9'
            },{
                title: 'Cours de natation / Aquaphobie',
                dow: [1,2,3,4,5],
                start: '17:00',
                end: '17:30',
                color: '#f5a9a9'
        }];
        const scheduler_collectif = [];
        
        
        function clearCalendar(){
            $("#calendar").fullCalendar( 'removeEvents' );
        };
        
        function setEventIntoCalendar(events){
            $("#calendar").fullCalendar( 'addEventSource', events);
        };
        
        $('#calendar').fullCalendar({
            header: false,
            defaultView: 'agendaWeek',
            columnFormat: 'dddd',
            allDaySlot: false,
//            hiddenDays: [0, 6], // on masque samedi, dimanche
            minTime: '07:00:00',
            maxTime: '22:00:00',
            height: 'auto',
            businessHours: [{
                start: '08:00',
                end: '21:00', 
                dow: [1,2,3,4,5]
            }],
            events: scheduler_aquatique
        });
        
        //Affiche les heures de séance aqua
        $('#scheduler_aquatique').on('click', function(){
            clearCalendar();
            setEventIntoCalendar(scheduler_aquatique);
        });
        
        //Affiche les heures de séance espace détente
        $('#scheduler_espace_detente').on('click', function(){
            clearCalendar();
            setEventIntoCalendar(scheduler_espace_detente);
        });
        
        //Affiche les heures de séance aquaphobie et cours de natation
        $('#scheduler_aquaphobie').on('click', function(){
            clearCalendar();
            setEventIntoCalendar(scheduler_aquaphobie);
        });
        
        //Affiche les heures de séance espace détente
        $('#scheduler_collectif').on('click', function(){
            clearCalendar();
            setEventIntoCalendar(scheduler_collectif);
        });
        
    </script>

</body>
</html>
