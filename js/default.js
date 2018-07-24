(function ($, Drupal, drupalSettings) {
Drupal.behaviors.tagcloud = {
  attach: function (context, settings) {
    // can access setting from 'drupalSettings';
    var mytags = drupalSettings.tags;

    console.log(mytags);
    $("#custom-tagclouds").jQCloud(mytags);
  }
};
})(jQuery, Drupal, drupalSettings);
