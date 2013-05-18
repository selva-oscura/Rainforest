<?php 
   session_start();
    if(!isset($_SESSION['logged_in'])) 
    {
        // var_dump($_SESSION);
        // die();
    header('location:index.php');
    exit;
    }
    require_once('connection.php');
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
                <h3>Welcome <?php echo $_SESSION['first_name'] ?></h3>
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
                    class='ui-btn-left' data-direction='reverse' data-rel='back' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-transition='slide' data-theme='e' href='#edit_events'
                    class='ui-btn-right' data-icon="gear" data-iconpos="left">
                        Edit Events
                    </a>

                </div>
                <ul data-role='listview' data-divider-theme='e' data-inset='true'>
<?php
    // var_dump($_SESSION);

    $query="SELECT events.id, events.date, events.name
            FROM events 
            LEFT JOIN people_events ON people_events.event_id=events.id
            LEFT JOIN people ON people.id=people_events.people_id
            WHERE people.user_id = '{$_SESSION['user_id']}'
            ORDER BY events.date ASC";
    // echo $query;
    // die();
    $events=fetch_all($query);
    $last_event="";
    $last_date="";
    foreach ($events as $event) 
    {

        if (!(($event['name']===$last_event) && ($event['date']===$last_date)))
        {
?>
               <li data-role='list-divider' role='heading'>

<?php
                echo $event['date'] . " - " . $event['name'];
?>
                </li>
<?php 
            $last_event=$event['name'];
            $last_date=$event['date'];
            $query="SELECT people.nickname, people.id 
                    FROM people
                    LEFT JOIN people_events ON people_events.people_id = people.id
                    WHERE people_events.event_id = '{$event['id']}'
                    ORDER BY people.id ASC";
            $people=fetch_all($query);
            foreach ($people as $person)
            {
?>
                <li data-theme='c'>

<?php
                    echo "<a href='#people_id" . $person['id'] . "' data-transition='slide'>" . $person['nickname'] . "</a>"
?>
                </li>
<?php 
            }
        }
    }
?>                    

                 </ul>
            </div>
            <div data-role='content' data-theme='b'>
                <h3></h3>
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
                    class='ui-btn-left' data-direction='reverse' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' href='#date' data-icon='back' data-iconpos='left'
                    class='ui-btn-right' data-direction='reverse' data-rel='back' data-transition='slide'>
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
                    class='ui-btn-left'  data-direction="reverse" data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-transition='slide' data-theme='e' href='#edit_people'
                    class='ui-btn-right' data-icon="gear" data-iconpos="left">
                        Edit People
                    </a>
                    <ul data-role='listview' data-divider-theme='e' data-inset='true'>
                        <li data-role='list-divider' role='heading'>
                            People
                            <input name='name_search' id='searchinput' placeholder='Search by Name' value='' data-mini='true' type='search'>
                        </li>
<?php 
    $query="SELECT people.id, people.nickname FROM people WHERE people.user_id='{$_SESSION['user_id']}'";
    $people=fetch_all($query);
    foreach ($people as $person) {

                        echo 
                        "<li data-theme='c'>
                            <a href='#people_id" . $person['id'] . "' data-transition='slide'>"
                                . $person['nickname'] . "
                            </a>
                        </li>";
    }
?>
                    </ul>
<!--                     <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-transition='slide'>
                        Home
                    </a> -->
                </div>
 <!--                <div data-role='content'>
                    <a data-role='button' data-theme='e' href='#edit_people' data-transition='slide'>
                        Add or Remove a Person
                    </a>
  -->                   <!---Haven't decided yet if I prefer a button at the top or might go back to this one at the bottom
                    <a data-role='button' data-theme='e' href='#sort_by'>
                        Change Sort Order
                    </a>-->
 <!--                </div> -->
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
                    class='ui-btn-left' data-direction='reverse' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' href='#name' data-direction='reverse' data-rel='back' data-icon='back' data-iconpos='left'
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
                    class='ui-btn-left' data-direction='reverse' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' href='#name' data-direction="reverse" data-icon='back' data-iconpos='left'
                    class='ui-btn-right' data-transition='slide'>
                        People
                    </a>
                </div>
            </div>
             <div class='yellow' data-role='controlgroup' data-direction='horizontal' data-divider-theme='e' data-inset='true'>
                <form id='search_user' action='process.php' method='post' data-role='list-divider' role='heading'>
                    <input type='button' data-role='button' data-corners='false' value='Remove People' data-theme='e'>
                    <input name='name_search' id='searchinput2' placeholder='Search by Name' value='' data-mini='false' type='search' data-theme='e'>

                </form>
<?php 
    foreach ($people as $person) {
        echo "<form class='remove_people' action='process.php' method='post'>
                    <input type='hidden' name='remove_people'>
                    <input type='hidden' name='person_id' value='" . $person['id'] . "'>
                    <input type='submit' data-role='button' data-corners='false' value='" . $person['nickname'] . "' data-icon='delete' data-iconpos='right' data-theme='c'>
                </form>
                ";
    }
?>                
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div><!--end of div remove_person-->


        <!-- gift ideas / wishlist pages -->
<?php 
foreach ($people as $person) 
{
        $query="SELECT ASIN, title, author, price_amazon, price_other_vendors_new, price_other_vendors_used, img_url, wishlist FROM products WHERE people_id='{$person['id']}'";
        $products=fetch_all($query);
        echo "<!--beginning of div " . $person['nickname'] . "-->
        <div data-role='page' id='people_id" . $person['id'] . "'>
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div data-theme='b' data-role='header'>
                    <h3>" . $person['nickname'] . "</h3>
                    <a data-role='button' href='#home' data-icon='home' data-iconpos='left'
                    class='ui-btn-left' data-direction='reverse' data-rel='back' data-transition='slide'>
                        Home
                    </a>
                    <a data-role='button' data-theme='e' data-direction='reverse' data-rel='back' data-icon='back' data-icon='back' data-iconpos='left'
                    class='ui-btn-right' data-transition='slide'>
                        Back
                    </a>
                </div>
            </div>
            <div data-role='content'>
                <div data-role='collapsible-set' data-theme='e' data-content-theme='c'>
                ";
    if(count($products)<1)
    {
                    echo "<div data-role='collapsible' data-collapsed='false'>
                        <h4>No Gift Ideas or Wish List Items Selected Yet</h4>
                        <div class='ui-grid-a'>
                            <h4>No Gift Ideas or Wish List Items Saved Yet</h4>
                        </div>
                    </div>
                    ";
    }
    else
    {
        foreach ($products as $product)
        {

                echo "<div data-role='collapsible' data-collapsed='true'>
                    <h4>" . $product['title'] . "</h4>
                    <div class='ui-grid-a'>
                        <div class='ui-block-a'>
                            <a href='http://www.amazon.com/dp/" . $product['ASIN'] . "'>
                                <img width='95' height='135' alt='Product Image' border='0' src='" . $product['img_url'] . "' />
                            </a>
                        </div>
                        <div class='ui-block-b'>
                            <a href='http://www.amazon.com/dp/" . $product['ASIN'] . "'>
                                <h5>" . $product['title'] . "</h5>
                            </a>
                            <h5>by " . $product['author'] . "</h5>
                            <h5>Amazon Price: " . $product['price_amazon'] . "</h5>
                            <h5>Other vendors Price (New): " . $product['price_other_vendors_new'] . "</h5>
                            <h5>Other vendors Price (Used): " . $product['price_other_vendors_used'] . "</h5>
                            <a data-role='button' href='http://www.amazon.com/dp/" . $product['ASIN'] . "' class='ui-btn-left' data-transition='slide'>Buy</a>
                        </div>
                    </div>
                </div>
                ";
    }
    }
                echo "<div data-role='content'>
                    <a data-role='button' href='http://www.amazon.com' data-theme='b' data-transition='slide'>
                        Browse for More Gift Ideas
                    </a>
                </div>
            </div>
            <div data-theme='b' data-role='footer' data-position='fixed'>
                <h3>
                </h3>
            </div>
        </div>
    </div>
    <!--end of div " . $person['nickname'] . "-->
";
}        
?>
    </body>
</html>
