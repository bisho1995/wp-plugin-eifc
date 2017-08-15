<?php
function eifc_25042017_get_email_ids()
{
global $wpdb;
//set the table name
$table_name=$wpdb->prefix."comments";
//setup the sql query
$sql = "SELECT distinct comment_author_email FROM $table_name where comment_author_email not like 'wapuu@wordpress.example'";
//get the result set
$result = $wpdb->get_results( $sql, OBJECT );
//print the number of email ids in the database
echo "<h3>Total email ids = ".count($result)."</h3>";
//print the email ids
foreach( $result as $results ) echo $results->comment_author_email."<br>";
//add the stylesheet
wp_enqueue_style( 'eifc_25042017_main.css',plugins_url( '/eifc_25042017_main.css',__FILE__) );
}
?>
  <div class="container">
    <h1>Email List</h1>
    <div>
      <p>Get the email ids of all those who comment in your page. You have the email Ids so now you can add them to your subscriber list or do anything with them.Have Fun!!</p>
    </div>
    <div class="email-holder">
      <?php echo eifc_25042017_get_email_ids()?>
    </div>
  </div>
