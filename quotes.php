<?php

require_once('sql_conn.php');

$query = "SELECT quote from quotes";
$response = @mysqli_query($dbc, $query);

if($response) {
  $quotes = mysqli_fetch_all($response, MYSQLI_ASSOC);
?>

<div class="quotes-wrapper">
  <div class="quotes"></div>
</div>

<script>
  var quotes = <?php echo json_encode($quotes); ?>;
  var index = 0;
  var quote = document.querySelector('.quotes');

  function displayQuote() {
    quote.style.opacity = 0;
    setTimeout(() => {
      quote.innerHTML = '<blockquote class="quote-text">' + '"' + quotes[index]['quote'] + '"' +'</blockquote>';
      quote.style.opacity = 1;
    }, 500);

    setTimeout(() => {
      quote.style.opacity = 0;
    }, 9000);

    index++;
    
    if (index >= quotes.length) {
      index = 0;
    }

    setTimeout(displayQuote, 10000); 
  }

  displayQuote();
</script>

<?php
} else {
  echo "Something went wrong";
  echo mysqli_error($dbc);
}
?>
