(function ($, Drupal, drupalSettings) {
Drupal.behaviors.tagcloud = {
  attach: function (context, settings) {
    // can access setting from 'drupalSettings';
    var mytags = drupalSettings.mytags;
    $(".content").jQCloud(myTags);
  }
};
})(jQuery, Drupal, drupalSettings);
