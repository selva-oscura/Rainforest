<?php 
    session_start();
    if(!(isset($_SESSION['logged_in']))) 
    {
    header('location:index.php');
    exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='initial-scale=1.0, user-scalable=no' />
        <meta name='apple-mobile-web-app-capable' content='yes' />
        <meta name='apple-mobile-web-app-status-bar-style' content='black' />
        <title>
        </title>
        <link rel='stylesheet' href='https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.css' />
        <link rel='stylesheet' href='my.css' />
        <script src='https://s3.amazonaws.com/codiqa-cdn/jquery-1.7.2.min.js'>
        </script>
        <script type="text/javascript">
            // $(document).ready(function() {
            // User-generated js that needs to be run before jquerymobile settings are applied
            // });
        </script>
        <script src='https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.js'>
        </script>
        <script src='my.js'>
        </script>

        <!-- User-generated css -->
        <style>
        </style>
    
        <script>
            // $("#user_login").validate({
            //     submitHandler: function(form) {
            //         console.log("Call Login Action");
            //     }
            // });
            try {
                $(function() {

                });

            } catch (error) {
                console.error('Your javascript has an error: ' + error);
            }
        </script>
    </head>
    <body>

        <!-- Home -->
        <div data-role='page' id='home'>
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div style='width: 300px; height: 140px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;text-align:center; margin:auto; margin-bottom:24px;'>
                    <img src='gifting_img.png' alt='gifting image'> 
                </div>
            </div>    
            <div data-role='content'>    
                <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                    <li data-role='list-divider' role='heading'>
                        Shop by
                    </li>
                    <li data-theme='e'>
                        <a href='#date' data-transition='slide'>
                            Date
                        </a>
                    </li>
                    <li data-theme='e'>
                        <a href='#name' data-transition='slide'>
                            Name
                        </a>
                    </li>
                </ul>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div><!--end of div home-->


        <!-- Date -->
        <div data-role='page' id='date'>
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div data-theme='b' data-role='header'>
                    <h3>
                    </h3>
                    <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-transition='slide' data-theme='e' href='#edit_events'
                    class='ui-btn-right'>
                        Edit Events
                    </a>

                </div>
                <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                    <li data-role='list-divider' role='heading'>
                        May 12, 2013 - Mother's Day
                    </li>
                    <li data-theme='c'>
                        <a href='#mom' data-transition='slide'>
                            Mom
                        </a>
                    </li>
                    <li data-role='list-divider' role='heading'>
                        June 9, 2013 - Graduation
                    </li>
                    <li data-theme='c'>
                        <a href='#lorenzo' data-transition='slide'>
                            Lorenzo
                        </a>
                    </li>
                    <li data-role='list-divider' role='heading'>
                        June 16, 2013 - Wedding
                    </li>
                    <li data-theme='c'>
                        <a href='#robert' data-transition='slide'>
                            Robert
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#joelle' data-transition='slide'>
                            Joëlle
                        </a>
                    </li>
                    <li data-role='list-divider' role='heading'>
                        December 25, 2013
                    </li>
                    <li data-theme='c'>
                        <a href='#mom' data-transition='slide'>
                            Mom
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#dad' data-transition='slide'>
                            Dad
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#betsy' data-transition='slide'>
                            Betsy
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#andre' data-transition='slide'>
                            André
                        </a>
                    </li>
                    <li data-role='list-divider' role='heading'>
                        March 21, 2014 - Nowrouz
                    </li>
                    <li data-theme='c'>
                        <a href='#kourosh' data-transition='slide'>
                            Kourosh
                        </a>
                    </li>
                </ul>
            </div>
            <div data-role='content'>
                <a data-role='button' data-theme='e' href='#add_event' data-transition='slide'>
                    Add or Remove Event
                </a>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div><!--end of div date-->


        <!-- edit_events -->
        <div data-role='page' id='edit_events'>
            <div data-theme='b' data-role='header'>
                <h2>
                    Rainforest Gifting
                </h2>
                <div data-theme='b' data-role='header'>
                    <h3>
                    </h3>
                    <a data-role='button' data-theme='b' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' href='#date' data-icon='back' data-iconpos='left'
                    class='ui-btn-right' data-transition='slide'>
                        Events
                    </a>
                </div>
            </div>
            <div data-role='content'>
                <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                    <li data-role='list-divider' role='heading'>
                        Edit Events
                    </li>
                    <li data-theme='c'>
                        <a href='#add_event' data-transition='slide'>
                            Add an Event
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#edit_event' data-transition='slide'>
                            Edit an Event
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#remove_event' data-transition='slide'>
                            Remove an Event
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#remove_event_person' data-transition='slide'>
                            Remove a Person from an Event
                        </a>
                    </li>                
                </ul>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div>

                <!-- Name -->
        <div data-role='page' id='name'>
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div data-theme='b' data-role='header'>
                    <h3>
                    </h3>
                    <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-transition='slide' data-theme='e' href='#edit_people'
                    class='ui-btn-right'>
                        Edit People
                    </a>
                    <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                        <li data-role='list-divider' role='heading'>
                            People
                            <input name='name_search' id='searchinput2' placeholder='Search by Name' value='' data-mini='true' type='search'>
                        </li>
                        <li data-theme='c'>
                            <a href='#mom' data-transition='slide'>
                                Mom
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#dad' data-transition='slide'>
                                Dad
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#anu' data-transition='slide'>
                                Anu
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#lorenzo' data-transition='slide'>
                                Lorenzo
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#joelle' data-transition='slide'>
                                Joëlle
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#andre' data-transition='slide'>
                                André
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#betsy' data-transition='slide'>
                                Betsy
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#robert' data-transition='slide'>
                                Robert
                            </a>
                        </li>
                        <li data-theme='c'>
                            <a href='#kourosh' data-transition='slide'>
                                Kourosh
                            </a>
                        </li>
                    </ul>
<!--                     <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a> -->
                </div>
                <div data-role='content'>
                    <a data-role='button' data-theme='e' href='#edit_people' data-transition='slide'>
                        Add or Remove a Person
                    </a>
                    <!---Haven't decided yet if I prefer a button at the top or might go back to this one at the bottom
                    <a data-role='button' data-theme='e' href='#sort_by'>
                        Change Sort Order
                    </a>-->
                </div>
                <div data-theme='b' data-role='footer' data-position='fixed'>
                    <h3>
                    </h3>
                </div>
            </div>
        </div><!--end of div name-->

        <!-- edit_people -->
        <div data-role='page' id='edit_people'>
            <div data-theme='b' data-role='header'>
                <h2>
                    Rainforest Gifting
                </h2>
                <div data-theme='b' data-role='header'>
                    <h3>
                    </h3>
                    <a data-role='button' data-theme='b' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' href='#name' data-icon='back' data-iconpos='left'
                    class='ui-btn-right' data-transition='slide'>
                        People
                    </a>
                </div>
            </div>
            <div data-role='content'>
                <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                    <li data-role='list-divider' role='heading'>
                        Edit People
                    </li>
                    <li data-theme='c'>
                        <a href='#add_person' data-transition='slide'>
                            Add a Person
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#edit_person' data-transition='slide'>
                            Edit a Person
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#remove_person' data-transition='slide'>
                            Remove a Person
                        </a>
                    </li>
                </ul>
                <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                    <li data-role='list-divider' role='heading'>
                        Change Sort Order
                    </li>
                    <li data-theme='c'>
                        <a href='#alpha_order' data-transition='slide'>
                            Alphabetical Order
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#custom_order' data-transition='slide'>
                            Custom Sort Order
                        </a>
                    </li>
                    <li data-theme='c'>
                        <a href='#group_order' data-transition='slide'>
                            Sort by Groups
                        </a>
                    </li>
                </ul>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div>

                <!-- remove_person -->
        <div data-role='page' id='remove_person'>
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div data-theme='b' data-role='header'>
                    <h3>
                    </h3>
                    <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' href='#name' data-icon='back' data-iconpos='left'
                    class='ui-btn-right' data-transition='slide'>
                        People
                    </a>
                </div>
            </div>
<!-- <ul data-role='listview' data-divider-theme='e' data-inset='true'>
<li data-role='list-divider' role='heading'> -->
             <div class='yellow' data-role='controlgroup' data-direction='horizontal' data-divider-theme='e' data-inset='true'>
                <form id='search_user' action='rainforest_process.php' method='post' data-role='list-divider' role='heading'>
                    <input type='button' data-role='button' data-corners='false' value='Remove People' data-theme='e'>
                    <input name='name_search' id='searchinput2' placeholder='Search by Name' value='' data-mini='false' type='search' data-theme='e'>

                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='mom'>
                    <input type='submit' data-role='button' data-corners='false' value='Mom' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='dad'>
                    <input type='submit' data-role='button' data-corners='false' value='Dad' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='anu'>
                    <input type='submit' data-role='button' data-corners='false' value='Anu' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='lorenzo'>
                    <input type='submit' data-role='button' data-corners='false' value='Lorenzo' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='joelle'>
                    <input type='submit' data-role='button' data-corners='false' value='Joëlle' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='andre'>
                    <input type='submit' data-role='button' data-corners='false' value='André' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='betsy'>
                    <input type='submit' data-role='button' data-corners='false' value='Betsy' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='robert'>
                    <input type='submit' data-role='button' data-corners='false' value='Robert' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                <form id='remove_user' action='rainforest_process.php' method='post'>
                    <input type='hidden' name='people_id' value='kourosh'>
                    <input type='submit' data-role='button' data-corners='false' value='Kourosh' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div><!--end of div remove_person-->


        <!-- mom -->
        <div data-role='page' id='mom'>
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div data-theme='b' data-role='header'>
                    <h3>
                        Mom
                    </h3>
                    <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a>
                </div>
            </div>
            <div data-role='content'>
                <div data-role='collapsible-set' data-theme='e' data-content-theme='c'>
                    <div data-role='collapsible' data-collapsed='false'>
                        <h4>
                            Stay Sharp Sudoku: 200 Challenging Puzzles
                        </h4>
                        <div class='ui-grid-a'>
                            <div class='ui-block-a'>
                                <img width='95' height='135' alt='Product Image' border='0' src='http://ecx.images-amazon.com/images/I/51ZdLJ9pPAL._SL500_SL135_.jpg' />
                            </div>
                            <div class='ui-block-b'>
                                <h5>Stay Sharp Sudoku: 200 Challenging Puzzles</h5>
                                <h5>by Will Shortz (Paperback)</h5>
                                <h5>$7.99</h5>
                                <a data-role='button' href='http://www.amazon.com' class='ui-btn-left' data-transition='slide'>Buy</a>
                            </div>
                        </div>
                    </div>
                    <div data-role='collapsible'>
                        <h4>
                            How to Roast a Lamb: New Greek Classic Cooking
                        </h4>
                        <div class='ui-grid-a'>
                            <div class='ui-block-a'>
                                <img width='104' height='135' alt='Product Image' border='0' src='http://ecx.images-amazon.com/images/I/51J7kauxzJL._SL500_PIsitb-sticker-arrow-big,TopRight,35,-73_OU01_SL135_.jpg'>
                            </div>
                            <div class='ui-block-b'>
                                <h5>How to Roast a Lamb: New Greek Classic Cooking</h5>
                                <h5>by Michael Psilakis</h5>
                                <h5>$23.33</h5>
                                <a data-role='button' href='http://www.amazon.com' class='ui-btn-left' data-transition='slide'>Buy</a>
                            </div>
                        </div>
                    </div>
                    <div data-role='collapsible'>
                        <h4>
                            Zojirushi NS-TGC10 Micom 5-1/2-Cup Rice Cooker and Warmer, Stainless Steel 
                        </h4>
                        <div class='ui-grid-a'>
                            <div class='ui-block-a'>
                                <img width='120' height='135' alt='Product Image' border='0' src='http://ecx.images-amazon.com/images/I/41reyI2PDAL._SL500_SL135_.jpg' >
                            </div>
                            <div class='ui-block-b'>
                                <h5>Zojirushi NS-TGC10 Micom 5-1/2-Cup Rice Cooker and Warmer, Stainless Steel</h5>
                                <h5>by Zojirushi</h5>
                                <h5>$147.99</h5>
                                <a data-role='button' href='http://www.amazon.com' class='ui-btn-left' data-transition='slide'>Buy</a>
                            </div>
                        </div>
                    </div>
                    <div data-role='collapsible'>
                        <h4>
                            G2 Violin, 4/4 size (Full size)
                        </h4>
                        <div class='ui-grid-a'>
                            <div class='ui-block-a'>
                                <img width='120' height='135' alt='Product Image' border='0' src='http://ecx.images-amazon.com/images/I/41UeKygre%2BL._SL500_SL135_.jpg' >
                            </div>
                            <div class='ui-block-b'>
                                <h5>G2 Violin, 4/4 size (Full size)</h5>
                                <h5>by Ricard Bunnel (sold by Kennedy Violins)</h5>
                                <h5>$249.99</h5>
                                <a data-role='button' href='http://www.amazon.com' class='ui-btn-left' data-transition='slide'>Buy</a>
                            </div>
                        </div>
                    </div>
                    <div data-role='collapsible'>
                        <h4>
                            Blindspot: A Novel
                        </h4>
                        <div class='ui-grid-a'>
                            <div class='ui-block-a'>
                                <img width='87' height='135' alt='Product Image' border='0' src='http://ecx.images-amazon.com/images/I/51fRPLDztLL._SL500_PIsitb-sticker-arrow-big,TopRight,35,-73_OU01_SL135_.jpg' />
                            </div>
                            <div class='ui-block-b'>
                                <h5>Blindspot: A Novel</h5>
                                <h5>by Jill LePore</h5>
                                <h5>$12.12</h5>
                                <a data-role='button' href='http://www.amazon.com' class='ui-btn-left' data-transition='slide'>Buy</a>
                            </div>
                        </div>
                   </div>
               </div>
                <div data-role='content'>
                    <a data-role='button' href='http://www.amazon.com' data-theme='b' href='#add_person' data-transition='slide'>
                        Browse for More Gift Ideas
                    </a>
                </div>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div><!--end of div Mom-->
    </body>
</html>