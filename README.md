# events
A touch of javascript event on PHP environment. One of my favorite class!

## How it works

``` 
  events::listener("header", function() {
    echo 'do this in the head section';
  });
  
  // some bunch of codes
  
  events::listener("header", function() {
    print_r("\n<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
  ?>
    <title>Event listener for PHP</title>
 <?php });

  // some bunch of codes
  
  events::listener("header", function() {
    echo '<script>"This is awesome"</script>';
  });
```

The listener must be called before the execution of the events. Then:

```
  <head>
    events::exec('header');
  </head>
```
Will output

```
  <head>
    do this in head section
    <meta name='viewport' content='width=device-width, initial-scale=1.0'> 
    <title>Event listener for PHP</title> <script>"This is awesome"</script>
  </head>
```

That's it!
