This plugin is based on the free [Advanced Ads ad management plugin](https://wordpress.org/plugins/advanced-ads/).

A more advanced version was released as an [WordPress Ad Server](https://wpadvancedads.com/ad-server-wordpress/) placement.

## Adjust the post type

With Advanced Ads 1.22 you might need to adjust the post type definition for ads using the following code:

```
add_filter( 'advanced-ads-post-type-params', function( $post_type_params ){
  $post_type_params[ 'query_vars' ] = true;
  
  return $post_type_params;
});
```

After you added this code, you need to refresh your permalink settings.
