created by ucscode!

# events
A touch of javascript event on PHP environment. One of my favorite class!

## How it works

```php 
  events::addListener("header", function() {
    echo 'do this in the head section';
  });
  
  // some bunch of codes
  
  events::addListener("header", function($data) {
    print_r("\n<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
  ?>
    <title><?php echo $data['title']; ?></title>
 <?php });

  // some bunch of codes
  
  events::addListener("header, banner", function($data, $event) {
    echo "<script>'Listening to event @ {$event} . '</script>";
  });
```

The listener must be called before the execution of the events. Then:

```php
  <head>
    <?php
      $data = array( "title" => 'Event listener for PHP' );
      events::exec('header', $data);
    ?>
  </head>
  
  <!--- comment --->
  
  <?php events::exec('banner'); ?>
```

Will output

```php
  <head>
    do this in head section
    <meta name='viewport' content='width=device-width, initial-scale=1.0'> 
    <title>Event listener for PHP</title> 
    <script>'Listening to event @ header'</script>
  </head>
  
  <!--- comment --->
  
  <script>'Listening to event @ banner'</script>
```

That's it!
