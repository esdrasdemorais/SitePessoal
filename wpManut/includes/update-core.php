<?php
/**
 * WordPress core upgrade functionality.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.7.0
 */

/**
 * Stores files to be deleted.
 *
 * @since 2.7.0
 * @global array $_old_files
 * @var array
 * @name $_old_files
 */
global $_old_files;

$_old_files = array(
// 2.0
'wpManut/import-b2.php',
'wpManut/import-blogger.php',
'wpManut/import-greymatter.php',
'wpManut/import-livejournal.php',
'wpManut/import-mt.php',
'wpManut/import-rss.php',
'wpManut/import-textpattern.php',
'wpManut/quicktags.js',
'wp-images/fade-butt.png',
'wp-images/get-firefox.png',
'wp-images/header-shadow.png',
'wp-images/smilies',
'wp-images/wp-small.png',
'wp-images/wpminilogo.png',
'wp.php',
// 2.0.8
'wp-includes/js/tinymce/plugins/inlinepopups/readme.txt',
// 2.1
'wpManut/edit-form-ajax-cat.php',
'wpManut/execute-pings.php',
'wpManut/inline-uploading.php',
'wpManut/link-categories.php',
'wpManut/list-manipulation.js',
'wpManut/list-manipulation.php',
'wp-includes/comment-functions.php',
'wp-includes/feed-functions.php',
'wp-includes/functions-compat.php',
'wp-includes/functions-formatting.php',
'wp-includes/functions-post.php',
'wp-includes/js/dbx-key.js',
'wp-includes/js/tinymce/plugins/autosave/langs/cs.js',
'wp-includes/js/tinymce/plugins/autosave/langs/sv.js',
'wp-includes/links.php',
'wp-includes/pluggable-functions.php',
'wp-includes/template-functions-author.php',
'wp-includes/template-functions-category.php',
'wp-includes/template-functions-general.php',
'wp-includes/template-functions-links.php',
'wp-includes/template-functions-post.php',
'wp-includes/wp-l10n.php',
// 2.2
'wpManut/cat-js.php',
'wpManut/import/b2.php',
'wp-includes/js/autosave-js.php',
'wp-includes/js/list-manipulation-js.php',
'wp-includes/js/wp-ajax-js.php',
// 2.3
'wpManut/admin-db.php',
'wpManut/cat.js',
'wpManut/categories.js',
'wpManut/custom-fields.js',
'wpManut/dbx-admin-key.js',
'wpManut/edit-comments.js',
'wpManut/install-rtl.css',
'wpManut/install.css',
'wpManut/upgrade-schema.php',
'wpManut/upload-functions.php',
'wpManut/upload-rtl.css',
'wpManut/upload.css',
'wpManut/upload.js',
'wpManut/users.js',
'wpManut/widgets-rtl.css',
'wpManut/widgets.css',
'wpManut/xfn.js',
'wp-includes/js/tinymce/license.html',
// 2.5
'wpManut/css/upload.css',
'wpManut/images/box-bg-left.gif',
'wpManut/images/box-bg-right.gif',
'wpManut/images/box-bg.gif',
'wpManut/images/box-butt-left.gif',
'wpManut/images/box-butt-right.gif',
'wpManut/images/box-butt.gif',
'wpManut/images/box-head-left.gif',
'wpManut/images/box-head-right.gif',
'wpManut/images/box-head.gif',
'wpManut/images/heading-bg.gif',
'wpManut/images/login-bkg-bottom.gif',
'wpManut/images/login-bkg-tile.gif',
'wpManut/images/notice.gif',
'wpManut/images/toggle.gif',
'wpManut/includes/upload.php',
'wpManut/js/dbx-admin-key.js',
'wpManut/js/link-cat.js',
'wpManut/profile-update.php',
'wpManut/templates.php',
'wp-includes/images/wlw/WpComments.png',
'wp-includes/images/wlw/WpIcon.png',
'wp-includes/images/wlw/WpWatermark.png',
'wp-includes/js/dbx.js',
'wp-includes/js/fat.js',
'wp-includes/js/list-manipulation.js',
'wp-includes/js/tinymce/langs/en.js',
'wp-includes/js/tinymce/plugins/autosave/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/autosave/langs',
'wp-includes/js/tinymce/plugins/directionality/images',
'wp-includes/js/tinymce/plugins/directionality/langs',
'wp-includes/js/tinymce/plugins/inlinepopups/css',
'wp-includes/js/tinymce/plugins/inlinepopups/images',
'wp-includes/js/tinymce/plugins/inlinepopups/jscripts',
'wp-includes/js/tinymce/plugins/paste/images',
'wp-includes/js/tinymce/plugins/paste/jscripts',
'wp-includes/js/tinymce/plugins/paste/langs',
'wp-includes/js/tinymce/plugins/spellchecker/classes/HttpClient.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyGoogleSpell.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyPspell.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/classes/TinyPspellShell.class.php',
'wp-includes/js/tinymce/plugins/spellchecker/css/spellchecker.css',
'wp-includes/js/tinymce/plugins/spellchecker/images',
'wp-includes/js/tinymce/plugins/spellchecker/langs',
'wp-includes/js/tinymce/plugins/spellchecker/tinyspell.php',
'wp-includes/js/tinymce/plugins/wordpress/images',
'wp-includes/js/tinymce/plugins/wordpress/langs',
'wp-includes/js/tinymce/plugins/wordpress/wordpress.css',
'wp-includes/js/tinymce/plugins/wphelp',
'wp-includes/js/tinymce/themes/advanced/css',
'wp-includes/js/tinymce/themes/advanced/images',
'wp-includes/js/tinymce/themes/advanced/jscripts',
'wp-includes/js/tinymce/themes/advanced/langs',
// 2.5.1
'wp-includes/js/tinymce/tiny_mce_gzip.php',
// 2.6
'wpManut/bookmarklet.php',
'wp-includes/js/jquery/jquery.dimensions.min.js',
'wp-includes/js/tinymce/plugins/wordpress/popups.css',
'wp-includes/js/wp-ajax.js',
// 2.7
'wpManut/css/press-this-ie-rtl.css',
'wpManut/css/press-this-ie.css',
'wpManut/css/upload-rtl.css',
'wpManut/edit-form.php',
'wpManut/images/comment-pill.gif',
'wpManut/images/comment-stalk-classic.gif',
'wpManut/images/comment-stalk-fresh.gif',
'wpManut/images/comment-stalk-rtl.gif',
'wpManut/images/del.png',
'wpManut/images/gear.png',
'wpManut/images/media-button-gallery.gif',
'wpManut/images/media-buttons.gif',
'wpManut/images/postbox-bg.gif',
'wpManut/images/tab.png',
'wpManut/images/tail.gif',
'wpManut/js/forms.js',
'wpManut/js/upload.js',
'wpManut/link-import.php',
'wp-includes/images/audio.png',
'wp-includes/images/css.png',
'wp-includes/images/default.png',
'wp-includes/images/doc.png',
'wp-includes/images/exe.png',
'wp-includes/images/html.png',
'wp-includes/images/js.png',
'wp-includes/images/pdf.png',
'wp-includes/images/swf.png',
'wp-includes/images/tar.png',
'wp-includes/images/text.png',
'wp-includes/images/video.png',
'wp-includes/images/zip.png',
'wp-includes/js/tinymce/tiny_mce_config.php',
'wp-includes/js/tinymce/tiny_mce_ext.js',
// 2.8
'wpManut/js/users.js',
'wp-includes/js/swfupload/plugins/swfupload.documentready.js',
'wp-includes/js/swfupload/plugins/swfupload.graceful_degradation.js',
'wp-includes/js/swfupload/swfupload_f9.swf',
'wp-includes/js/tinymce/plugins/autosave',
'wp-includes/js/tinymce/plugins/paste/css',
'wp-includes/js/tinymce/utils/mclayer.js',
'wp-includes/js/tinymce/wordpress.css',
// 2.8.5
'wpManut/import/btt.php',
'wpManut/import/jkw.php',
// 2.9
'wpManut/js/page.dev.js',
'wpManut/js/page.js',
'wpManut/js/set-post-thumbnail-handler.dev.js',
'wpManut/js/set-post-thumbnail-handler.js',
'wpManut/js/slug.dev.js',
'wpManut/js/slug.js',
'wp-includes/gettext.php',
'wp-includes/js/tinymce/plugins/wordpress/js',
'wp-includes/streams.php',
// MU
'README.txt',
'htaccess.dist',
'index-install.php',
'wpManut/css/mu-rtl.css',
'wpManut/css/mu.css',
'wpManut/images/site-admin.png',
'wpManut/includes/mu.php',
'wpManut/wpmu-admin.php',
'wpManut/wpmu-blogs.php',
'wpManut/wpmu-edit.php',
'wpManut/wpmu-options.php',
'wpManut/wpmu-themes.php',
'wpManut/wpmu-upgrade-site.php',
'wpManut/wpmu-users.php',
'wp-includes/images/wordpress-mu.png',
'wp-includes/wpmu-default-filters.php',
'wp-includes/wpmu-functions.php',
'wpmu-settings.php',
// 3.0
'wpManut/categories.php',
'wpManut/edit-category-form.php',
'wpManut/edit-page-form.php',
'wpManut/edit-pages.php',
'wpManut/images/admin-header-footer.png',
'wpManut/images/browse-happy.gif',
'wpManut/images/ico-add.png',
'wpManut/images/ico-close.png',
'wpManut/images/ico-edit.png',
'wpManut/images/ico-viewpage.png',
'wpManut/images/fav-top.png',
'wpManut/images/screen-options-left.gif',
'wpManut/images/wp-logo-vs.gif',
'wpManut/images/wp-logo.gif',
'wpManut/import',
'wpManut/js/wp-gears.dev.js',
'wpManut/js/wp-gears.js',
'wpManut/options-misc.php',
'wpManut/page-new.php',
'wpManut/page.php',
'wpManut/rtl.css',
'wpManut/rtl.dev.css',
'wpManut/update-links.php',
'wpManut/wpManut.css',
'wpManut/wpManut.dev.css',
'wp-includes/js/codepress',
'wp-includes/js/codepress/engines/khtml.js',
'wp-includes/js/codepress/engines/older.js',
'wp-includes/js/jquery/autocomplete.dev.js',
'wp-includes/js/jquery/autocomplete.js',
'wp-includes/js/jquery/interface.js',
'wp-includes/js/scriptaculous/prototype.js',
'wp-includes/js/tinymce/wp-tinymce.js',
// 3.1
'wpManut/edit-attachment-rows.php',
'wpManut/edit-link-categories.php',
'wpManut/edit-link-category-form.php',
'wpManut/edit-post-rows.php',
'wpManut/images/button-grad-active-vs.png',
'wpManut/images/button-grad-vs.png',
'wpManut/images/fav-arrow-vs-rtl.gif',
'wpManut/images/fav-arrow-vs.gif',
'wpManut/images/fav-top-vs.gif',
'wpManut/images/list-vs.png',
'wpManut/images/screen-options-right-up.gif',
'wpManut/images/screen-options-right.gif',
'wpManut/images/visit-site-button-grad-vs.gif',
'wpManut/images/visit-site-button-grad.gif',
'wpManut/link-category.php',
'wpManut/sidebar.php',
'wp-includes/classes.php',
'wp-includes/js/tinymce/blank.htm',
'wp-includes/js/tinymce/plugins/media/css/content.css',
'wp-includes/js/tinymce/plugins/media/img',
'wp-includes/js/tinymce/plugins/safari',
// 3.2
'wpManut/images/logo-login.gif',
'wpManut/images/star.gif',
'wpManut/js/list-table.dev.js',
'wpManut/js/list-table.js',
'wp-includes/default-embeds.php',
'wp-includes/js/tinymce/plugins/wordpress/img/help.gif',
'wp-includes/js/tinymce/plugins/wordpress/img/more.gif',
'wp-includes/js/tinymce/plugins/wordpress/img/toolbars.gif',
'wp-includes/js/tinymce/themes/advanced/img/fm.gif',
'wp-includes/js/tinymce/themes/advanced/img/sflogo.png',
// 3.3
'wpManut/css/colors-classic-rtl.css',
'wpManut/css/colors-classic-rtl.dev.css',
'wpManut/css/colors-fresh-rtl.css',
'wpManut/css/colors-fresh-rtl.dev.css',
'wpManut/css/dashboard-rtl.dev.css',
'wpManut/css/dashboard.dev.css',
'wpManut/css/global-rtl.css',
'wpManut/css/global-rtl.dev.css',
'wpManut/css/global.css',
'wpManut/css/global.dev.css',
'wpManut/css/install-rtl.dev.css',
'wpManut/css/login-rtl.dev.css',
'wpManut/css/login.dev.css',
'wpManut/css/ms.css',
'wpManut/css/ms.dev.css',
'wpManut/css/nav-menu-rtl.css',
'wpManut/css/nav-menu-rtl.dev.css',
'wpManut/css/nav-menu.css',
'wpManut/css/nav-menu.dev.css',
'wpManut/css/plugin-install-rtl.css',
'wpManut/css/plugin-install-rtl.dev.css',
'wpManut/css/plugin-install.css',
'wpManut/css/plugin-install.dev.css',
'wpManut/css/press-this-rtl.dev.css',
'wpManut/css/press-this.dev.css',
'wpManut/css/theme-editor-rtl.css',
'wpManut/css/theme-editor-rtl.dev.css',
'wpManut/css/theme-editor.css',
'wpManut/css/theme-editor.dev.css',
'wpManut/css/theme-install-rtl.css',
'wpManut/css/theme-install-rtl.dev.css',
'wpManut/css/theme-install.css',
'wpManut/css/theme-install.dev.css',
'wpManut/css/widgets-rtl.dev.css',
'wpManut/css/widgets.dev.css',
'wpManut/includes/internal-linking.php',
'wp-includes/images/admin-bar-sprite-rtl.png',
'wp-includes/js/jquery/ui.button.js',
'wp-includes/js/jquery/ui.core.js',
'wp-includes/js/jquery/ui.dialog.js',
'wp-includes/js/jquery/ui.draggable.js',
'wp-includes/js/jquery/ui.droppable.js',
'wp-includes/js/jquery/ui.mouse.js',
'wp-includes/js/jquery/ui.position.js',
'wp-includes/js/jquery/ui.resizable.js',
'wp-includes/js/jquery/ui.selectable.js',
'wp-includes/js/jquery/ui.sortable.js',
'wp-includes/js/jquery/ui.tabs.js',
'wp-includes/js/jquery/ui.widget.js',
'wp-includes/js/l10n.dev.js',
'wp-includes/js/l10n.js',
'wp-includes/js/tinymce/plugins/wplink/css',
'wp-includes/js/tinymce/plugins/wplink/img',
'wp-includes/js/tinymce/plugins/wplink/js',
'wp-includes/js/tinymce/themes/advanced/img/wpicons.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/butt2.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/button_bg.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/down_arrow.gif',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/fade-butt.png',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/separator.gif',
// Don't delete, yet: 'wp-rss.php',
// Don't delete, yet: 'wp-rdf.php',
// Don't delete, yet: 'wp-rss2.php',
// Don't delete, yet: 'wp-commentsrss2.php',
// Don't delete, yet: 'wp-atom.php',
// Don't delete, yet: 'wp-feed.php',
// 3.4
'wpManut/images/gray-star.png',
'wpManut/images/logo-login.png',
'wpManut/images/star.png',
'wpManut/index-extra.php',
'wpManut/network/index-extra.php',
'wpManut/user/index-extra.php',
'wpManut/images/screenshots/admin-flyouts.png',
'wpManut/images/screenshots/coediting.png',
'wpManut/images/screenshots/drag-and-drop.png',
'wpManut/images/screenshots/help-screen.png',
'wpManut/images/screenshots/media-icon.png',
'wpManut/images/screenshots/new-feature-pointer.png',
'wpManut/images/screenshots/welcome-screen.png',
'wp-includes/css/editor-buttons.css',
'wp-includes/css/editor-buttons.dev.css',
'wp-includes/js/tinymce/plugins/paste/blank.htm',
'wp-includes/js/tinymce/plugins/wordpress/css',
'wp-includes/js/tinymce/plugins/wordpress/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wordpress/img/embedded.png',
'wp-includes/js/tinymce/plugins/wordpress/img/more_bug.gif',
'wp-includes/js/tinymce/plugins/wordpress/img/page_bug.gif',
'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpeditimage/css/editimage-rtl.css',
'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin.dev.js',
'wp-includes/js/tinymce/plugins/wpgallery/img/gallery.png',
'wp-includes/js/tinymce/plugins/wplink/editor_plugin.dev.js',
// Don't delete, yet: 'wp-pass.php',
// Don't delete, yet: 'wp-register.php',
// 3.5
'wpManut/gears-manifest.php',
'wpManut/includes/manifest.php',
'wpManut/images/archive-link.png',
'wpManut/images/blue-grad.png',
'wpManut/images/button-grad-active.png',
'wpManut/images/button-grad.png',
'wpManut/images/ed-bg-vs.gif',
'wpManut/images/ed-bg.gif',
'wpManut/images/fade-butt.png',
'wpManut/images/fav-arrow-rtl.gif',
'wpManut/images/fav-arrow.gif',
'wpManut/images/fav-vs.png',
'wpManut/images/fav.png',
'wpManut/images/gray-grad.png',
'wpManut/images/loading-publish.gif',
'wpManut/images/logo-ghost.png',
'wpManut/images/logo.gif',
'wpManut/images/menu-arrow-frame-rtl.png',
'wpManut/images/menu-arrow-frame.png',
'wpManut/images/menu-arrows.gif',
'wpManut/images/menu-bits-rtl-vs.gif',
'wpManut/images/menu-bits-rtl.gif',
'wpManut/images/menu-bits-vs.gif',
'wpManut/images/menu-bits.gif',
'wpManut/images/menu-dark-rtl-vs.gif',
'wpManut/images/menu-dark-rtl.gif',
'wpManut/images/menu-dark-vs.gif',
'wpManut/images/menu-dark.gif',
'wpManut/images/required.gif',
'wpManut/images/screen-options-toggle-vs.gif',
'wpManut/images/screen-options-toggle.gif',
'wpManut/images/toggle-arrow-rtl.gif',
'wpManut/images/toggle-arrow.gif',
'wpManut/images/upload-classic.png',
'wpManut/images/upload-fresh.png',
'wpManut/images/white-grad-active.png',
'wpManut/images/white-grad.png',
'wpManut/images/widgets-arrow-vs.gif',
'wpManut/images/widgets-arrow.gif',
'wpManut/images/wpspin_dark.gif',
'wp-includes/images/upload.png',
'wp-includes/js/prototype.js',
'wp-includes/js/scriptaculous',
'wpManut/css/wpManut-rtl.dev.css',
'wpManut/css/wpManut.dev.css',
'wpManut/css/media-rtl.dev.css',
'wpManut/css/media.dev.css',
'wpManut/css/colors-classic.dev.css',
'wpManut/css/customize-controls-rtl.dev.css',
'wpManut/css/customize-controls.dev.css',
'wpManut/css/ie-rtl.dev.css',
'wpManut/css/ie.dev.css',
'wpManut/css/install.dev.css',
'wpManut/css/colors-fresh.dev.css',
'wp-includes/js/customize-base.dev.js',
'wp-includes/js/json2.dev.js',
'wp-includes/js/comment-reply.dev.js',
'wp-includes/js/customize-preview.dev.js',
'wp-includes/js/wplink.dev.js',
'wp-includes/js/tw-sack.dev.js',
'wp-includes/js/wp-list-revisions.dev.js',
'wp-includes/js/autosave.dev.js',
'wp-includes/js/admin-bar.dev.js',
'wp-includes/js/quicktags.dev.js',
'wp-includes/js/wp-ajax-response.dev.js',
'wp-includes/js/wp-pointer.dev.js',
'wp-includes/js/hoverIntent.dev.js',
'wp-includes/js/colorpicker.dev.js',
'wp-includes/js/wp-lists.dev.js',
'wp-includes/js/customize-loader.dev.js',
'wp-includes/js/jquery/jquery.table-hotkeys.dev.js',
'wp-includes/js/jquery/jquery.color.dev.js',
'wp-includes/js/jquery/jquery.color.js',
'wp-includes/js/jquery/jquery.hotkeys.dev.js',
'wp-includes/js/jquery/jquery.form.dev.js',
'wp-includes/js/jquery/suggest.dev.js',
'wpManut/js/xfn.dev.js',
'wpManut/js/set-post-thumbnail.dev.js',
'wpManut/js/comment.dev.js',
'wpManut/js/theme.dev.js',
'wpManut/js/cat.dev.js',
'wpManut/js/password-strength-meter.dev.js',
'wpManut/js/user-profile.dev.js',
'wpManut/js/theme-preview.dev.js',
'wpManut/js/post.dev.js',
'wpManut/js/media-upload.dev.js',
'wpManut/js/word-count.dev.js',
'wpManut/js/plugin-install.dev.js',
'wpManut/js/edit-comments.dev.js',
'wpManut/js/media-gallery.dev.js',
'wpManut/js/custom-fields.dev.js',
'wpManut/js/custom-background.dev.js',
'wpManut/js/common.dev.js',
'wpManut/js/inline-edit-tax.dev.js',
'wpManut/js/gallery.dev.js',
'wpManut/js/utils.dev.js',
'wpManut/js/widgets.dev.js',
'wpManut/js/wp-fullscreen.dev.js',
'wpManut/js/nav-menu.dev.js',
'wpManut/js/dashboard.dev.js',
'wpManut/js/link.dev.js',
'wpManut/js/user-suggest.dev.js',
'wpManut/js/postbox.dev.js',
'wpManut/js/tags.dev.js',
'wpManut/js/image-edit.dev.js',
'wpManut/js/media.dev.js',
'wpManut/js/customize-controls.dev.js',
'wpManut/js/inline-edit-post.dev.js',
'wpManut/js/categories.dev.js',
'wpManut/js/editor.dev.js',
'wp-includes/js/tinymce/plugins/wpeditimage/js/editimage.dev.js',
'wp-includes/js/tinymce/plugins/wpdialogs/js/popup.dev.js',
'wp-includes/js/tinymce/plugins/wpdialogs/js/wpdialog.dev.js',
'wp-includes/js/plupload/handlers.dev.js',
'wp-includes/js/plupload/wp-plupload.dev.js',
'wp-includes/js/swfupload/handlers.dev.js',
'wp-includes/js/jcrop/jquery.Jcrop.dev.js',
'wp-includes/js/jcrop/jquery.Jcrop.js',
'wp-includes/js/jcrop/jquery.Jcrop.css',
'wp-includes/js/imgareaselect/jquery.imgareaselect.dev.js',
'wp-includes/css/wp-pointer.dev.css',
'wp-includes/css/editor.dev.css',
'wp-includes/css/jquery-ui-dialog.dev.css',
'wp-includes/css/admin-bar-rtl.dev.css',
'wp-includes/css/admin-bar.dev.css',
'wp-includes/js/jquery/ui/jquery.effects.clip.min.js',
'wp-includes/js/jquery/ui/jquery.effects.scale.min.js',
'wp-includes/js/jquery/ui/jquery.effects.blind.min.js',
'wp-includes/js/jquery/ui/jquery.effects.core.min.js',
'wp-includes/js/jquery/ui/jquery.effects.shake.min.js',
'wp-includes/js/jquery/ui/jquery.effects.fade.min.js',
'wp-includes/js/jquery/ui/jquery.effects.explode.min.js',
'wp-includes/js/jquery/ui/jquery.effects.slide.min.js',
'wp-includes/js/jquery/ui/jquery.effects.drop.min.js',
'wp-includes/js/jquery/ui/jquery.effects.highlight.min.js',
'wp-includes/js/jquery/ui/jquery.effects.bounce.min.js',
'wp-includes/js/jquery/ui/jquery.effects.pulsate.min.js',
'wp-includes/js/jquery/ui/jquery.effects.transfer.min.js',
'wp-includes/js/jquery/ui/jquery.effects.fold.min.js',
'wpManut/images/screenshots/captions-1.png',
'wpManut/images/screenshots/captions-2.png',
'wpManut/images/screenshots/flex-header-1.png',
'wpManut/images/screenshots/flex-header-2.png',
'wpManut/images/screenshots/flex-header-3.png',
'wpManut/images/screenshots/flex-header-media-library.png',
'wpManut/images/screenshots/theme-customizer.png',
'wpManut/images/screenshots/twitter-embed-1.png',
'wpManut/images/screenshots/twitter-embed-2.png',
'wpManut/js/utils.js',
'wpManut/options-privacy.php',
'wp-app.php',
'wp-includes/class-wp-atom-server.php',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/ui.css',
// 3.5.2
'wp-includes/js/swfupload/swfupload-all.js',
// 3.6
'wpManut/js/revisions-js.php',
'wpManut/images/screenshots',
'wpManut/js/categories.js',
'wpManut/js/categories.min.js',
'wpManut/js/custom-fields.js',
'wpManut/js/custom-fields.min.js',
// 3.7
'wpManut/js/cat.js',
'wpManut/js/cat.min.js',
'wp-includes/js/tinymce/plugins/wpeditimage/js/editimage.min.js',
// 3.8
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/page_bug.gif',
'wp-includes/js/tinymce/themes/advanced/skins/wp_theme/img/more_bug.gif',
'wp-includes/js/thickbox/tb-close-2x.png',
'wp-includes/js/thickbox/tb-close.png',
'wp-includes/images/wpmini-blue-2x.png',
'wp-includes/images/wpmini-blue.png',
'wpManut/css/colors-fresh.css',
'wpManut/css/colors-classic.css',
'wpManut/css/colors-fresh.min.css',
'wpManut/css/colors-classic.min.css',
'wpManut/js/about.min.js',
'wpManut/js/about.js',
'wpManut/images/arrows-dark-vs-2x.png',
'wpManut/images/wp-logo-vs.png',
'wpManut/images/arrows-dark-vs.png',
'wpManut/images/wp-logo.png',
'wpManut/images/arrows-pr.png',
'wpManut/images/arrows-dark.png',
'wpManut/images/press-this.png',
'wpManut/images/press-this-2x.png',
'wpManut/images/arrows-vs-2x.png',
'wpManut/images/welcome-icons.png',
'wpManut/images/wp-logo-2x.png',
'wpManut/images/stars-rtl-2x.png',
'wpManut/images/arrows-dark-2x.png',
'wpManut/images/arrows-pr-2x.png',
'wpManut/images/menu-shadow-rtl.png',
'wpManut/images/arrows-vs.png',
'wpManut/images/about-search-2x.png',
'wpManut/images/bubble_bg-rtl-2x.gif',
'wpManut/images/wp-badge-2x.png',
'wpManut/images/wordpress-logo-2x.png',
'wpManut/images/bubble_bg-rtl.gif',
'wpManut/images/wp-badge.png',
'wpManut/images/menu-shadow.png',
'wpManut/images/about-globe-2x.png',
'wpManut/images/welcome-icons-2x.png',
'wpManut/images/stars-rtl.png',
'wpManut/images/wp-logo-vs-2x.png',
'wpManut/images/about-updates-2x.png',
// 3.9
'wpManut/css/colors.css',
'wpManut/css/colors.min.css',
'wpManut/css/colors-rtl.css',
'wpManut/css/colors-rtl.min.css',
'wpManut/css/media-rtl.min.css',
'wpManut/css/media.min.css',
'wpManut/css/farbtastic-rtl.min.css',
'wpManut/images/lock-2x.png',
'wpManut/images/lock.png',
'wpManut/js/theme-preview.js',
'wpManut/js/theme-install.min.js',
'wpManut/js/theme-install.js',
'wpManut/js/theme-preview.min.js',
'wp-includes/js/plupload/plupload.html4.js',
'wp-includes/js/plupload/plupload.html5.js',
'wp-includes/js/plupload/changelog.txt',
'wp-includes/js/plupload/plupload.silverlight.js',
'wp-includes/js/plupload/plupload.flash.js',
'wp-includes/js/plupload/plupload.js',
'wp-includes/js/tinymce/plugins/spellchecker',
'wp-includes/js/tinymce/plugins/inlinepopups',
'wp-includes/js/tinymce/plugins/media/js',
'wp-includes/js/tinymce/plugins/media/css',
'wp-includes/js/tinymce/plugins/wordpress/img',
'wp-includes/js/tinymce/plugins/wpdialogs/js',
'wp-includes/js/tinymce/plugins/wpeditimage/img',
'wp-includes/js/tinymce/plugins/wpeditimage/js',
'wp-includes/js/tinymce/plugins/wpeditimage/css',
'wp-includes/js/tinymce/plugins/wpgallery/img',
'wp-includes/js/tinymce/plugins/wpfullscreen/css',
'wp-includes/js/tinymce/plugins/paste/js',
'wp-includes/js/tinymce/themes/advanced',
'wp-includes/js/tinymce/tiny_mce.js',
'wp-includes/js/tinymce/mark_loaded_src.js',
'wp-includes/js/tinymce/wp-tinymce-schema.js',
'wp-includes/js/tinymce/plugins/media/editor_plugin.js',
'wp-includes/js/tinymce/plugins/media/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/media/media.htm',
'wp-includes/js/tinymce/plugins/wpview/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wpview/editor_plugin.js',
'wp-includes/js/tinymce/plugins/directionality/editor_plugin.js',
'wp-includes/js/tinymce/plugins/directionality/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wordpress/editor_plugin.js',
'wp-includes/js/tinymce/plugins/wordpress/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wpdialogs/editor_plugin.js',
'wp-includes/js/tinymce/plugins/wpeditimage/editimage.html',
'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin.js',
'wp-includes/js/tinymce/plugins/wpeditimage/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/fullscreen/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/fullscreen/fullscreen.htm',
'wp-includes/js/tinymce/plugins/fullscreen/editor_plugin.js',
'wp-includes/js/tinymce/plugins/wplink/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wplink/editor_plugin.js',
'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wpgallery/editor_plugin.js',
'wp-includes/js/tinymce/plugins/tabfocus/editor_plugin.js',
'wp-includes/js/tinymce/plugins/tabfocus/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin.js',
'wp-includes/js/tinymce/plugins/wpfullscreen/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/paste/editor_plugin.js',
'wp-includes/js/tinymce/plugins/paste/pasteword.htm',
'wp-includes/js/tinymce/plugins/paste/editor_plugin_src.js',
'wp-includes/js/tinymce/plugins/paste/pastetext.htm',
'wp-includes/js/tinymce/langs/wp-langs.php',
// 4.1
'wp-includes/js/jquery/ui/jquery.ui.accordion.min.js',
'wp-includes/js/jquery/ui/jquery.ui.autocomplete.min.js',
'wp-includes/js/jquery/ui/jquery.ui.button.min.js',
'wp-includes/js/jquery/ui/jquery.ui.core.min.js',
'wp-includes/js/jquery/ui/jquery.ui.datepicker.min.js',
'wp-includes/js/jquery/ui/jquery.ui.dialog.min.js',
'wp-includes/js/jquery/ui/jquery.ui.draggable.min.js',
'wp-includes/js/jquery/ui/jquery.ui.droppable.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-blind.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-bounce.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-clip.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-drop.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-explode.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-fade.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-fold.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-highlight.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-pulsate.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-scale.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-shake.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-slide.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect-transfer.min.js',
'wp-includes/js/jquery/ui/jquery.ui.effect.min.js',
'wp-includes/js/jquery/ui/jquery.ui.menu.min.js',
'wp-includes/js/jquery/ui/jquery.ui.mouse.min.js',
'wp-includes/js/jquery/ui/jquery.ui.position.min.js',
'wp-includes/js/jquery/ui/jquery.ui.progressbar.min.js',
'wp-includes/js/jquery/ui/jquery.ui.resizable.min.js',
'wp-includes/js/jquery/ui/jquery.ui.selectable.min.js',
'wp-includes/js/jquery/ui/jquery.ui.slider.min.js',
'wp-includes/js/jquery/ui/jquery.ui.sortable.min.js',
'wp-includes/js/jquery/ui/jquery.ui.spinner.min.js',
'wp-includes/js/jquery/ui/jquery.ui.tabs.min.js',
'wp-includes/js/jquery/ui/jquery.ui.tooltip.min.js',
'wp-includes/js/jquery/ui/jquery.ui.widget.min.js',
'wp-includes/js/tinymce/skins/wordpress/images/dashicon-no-alt.png',
);

/**
 * Stores new files in wp-content to copy
 *
 * The contents of this array indicate any new bundled plugins/themes which
 * should be installed with the WordPress Upgrade. These items will not be
 * re-installed in future upgrades, this behaviour is controlled by the
 * introduced version present here being older than the current installed version.
 *
 * The content of this array should follow the following format:
 * Filename (relative to wp-content) => Introduced version
 * Directories should be noted by suffixing it with a trailing slash (/)
 *
 * @since 3.2.0
 * @global array $_new_bundled_files
 * @var array
 * @name $_new_bundled_files
 */
global $_new_bundled_files;

$_new_bundled_files = array(
	'plugins/akismet/'       => '2.0',
	'themes/twentyten/'      => '3.0',
	'themes/twentyeleven/'   => '3.2',
	'themes/twentytwelve/'   => '3.5',
	'themes/twentythirteen/' => '3.6',
	'themes/twentyfourteen/' => '3.8',
	'themes/twentyfifteen/'  => '4.1',
);

/**
 * Upgrade the core of WordPress.
 *
 * This will create a .maintenance file at the base of the WordPress directory
 * to ensure that people can not access the web site, when the files are being
 * copied to their locations.
 *
 * The files in the {@link $_old_files} list will be removed and the new files
 * copied from the zip file after the database is upgraded.
 *
 * The files in the {@link $_new_bundled_files} list will be added to the installation
 * if the version is greater than or equal to the old version being upgraded.
 *
 * The steps for the upgrader for after the new release is downloaded and
 * unzipped is:
 *   1. Test unzipped location for select files to ensure that unzipped worked.
 *   2. Create the .maintenance file in current WordPress base.
 *   3. Copy new WordPress directory over old WordPress files.
 *   4. Upgrade WordPress to new version.
 *     4.1. Copy all files/folders other than wp-content
 *     4.2. Copy any language files to WP_LANG_DIR (which may differ from WP_CONTENT_DIR
 *     4.3. Copy any new bundled themes/plugins to their respective locations
 *   5. Delete new WordPress directory path.
 *   6. Delete .maintenance file.
 *   7. Remove old files.
 *   8. Delete 'update_core' option.
 *
 * There are several areas of failure. For instance if PHP times out before step
 * 6, then you will not be able to access any portion of your site. Also, since
 * the upgrade will not continue where it left off, you will not be able to
 * automatically remove old files and remove the 'update_core' option. This
 * isn't that bad.
 *
 * If the copy of the new WordPress over the old fails, then the worse is that
 * the new WordPress directory will remain.
 *
 * If it is assumed that every file will be copied over, including plugins and
 * themes, then if you edit the default theme, you should rename it, so that
 * your changes remain.
 *
 * @since 2.7.0
 *
 * @param string $from New release unzipped path.
 * @param string $to Path to old WordPress installation.
 * @return WP_Error|null WP_Error on failure, null on success.
 */
function update_core($from, $to) {
	global $wp_filesystem, $_old_files, $_new_bundled_files, $wpdb;

	@set_time_limit( 300 );

	/**
	 * Filter feedback messages displayed during the core update process.
	 *
	 * The filter is first evaluated after the zip file for the latest version
	 * has been downloaded and unzipped. It is evaluated five more times during
	 * the process:
	 *
	 * 1. Before WordPress begins the core upgrade process.
	 * 2. Before Maintenance Mode is enabled.
	 * 3. Before WordPress begins copying over the necessary files.
	 * 4. Before Maintenance Mode is disabled.
	 * 5. Before the database is upgraded.
	 *
	 * @since 2.5.0
	 *
	 * @param string $feedback The core update feedback messages.
	 */
	apply_filters( 'update_feedback', __( 'Verifying the unpacked files&#8230;' ) );

	// Sanity check the unzipped distribution.
	$distro = '';
	$roots = array( '/wordpress/', '/wordpress-mu/' );
	foreach ( $roots as $root ) {
		if ( $wp_filesystem->exists( $from . $root . 'readme.html' ) && $wp_filesystem->exists( $from . $root . 'wp-includes/version.php' ) ) {
			$distro = $root;
			break;
		}
	}
	if ( ! $distro ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'insane_distro', __('The update could not be unpacked') );
	}

	// Import $wp_version, $required_php_version, and $required_mysql_version from the new version
	// $wp_filesystem->wp_content_dir() returned unslashed pre-2.8
	$versions_file = trailingslashit( $wp_filesystem->wp_content_dir() ) . 'upgrade/version-current.php';
	if ( ! $wp_filesystem->copy( $from . $distro . 'wp-includes/version.php', $versions_file ) ) {
		$wp_filesystem->delete( $from, true );
		return new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'wp-includes/version.php' );
	}

	$wp_filesystem->chmod( $versions_file, FS_CHMOD_FILE );
	require( WP_CONTENT_DIR . '/upgrade/version-current.php' );
	$wp_filesystem->delete( $versions_file );

	$php_version    = phpversion();
	$mysql_version  = $wpdb->db_version();
	$old_wp_version = $GLOBALS['wp_version']; // The version of WordPress we're updating from
	$development_build = ( false !== strpos( $old_wp_version . $wp_version, '-' )  ); // a dash in the version indicates a Development release
	$php_compat     = version_compare( $php_version, $required_php_version, '>=' );
	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) && empty( $wpdb->is_mysql ) )
		$mysql_compat = true;
	else
		$mysql_compat = version_compare( $mysql_version, $required_mysql_version, '>=' );

	if ( !$mysql_compat || !$php_compat )
		$wp_filesystem->delete($from, true);

	if ( !$mysql_compat && !$php_compat )
		return new WP_Error( 'php_mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher and MySQL version %3$s or higher. You are running PHP version %4$s and MySQL version %5$s.'), $wp_version, $required_php_version, $required_mysql_version, $php_version, $mysql_version ) );
	elseif ( !$php_compat )
		return new WP_Error( 'php_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires PHP version %2$s or higher. You are running version %3$s.'), $wp_version, $required_php_version, $php_version ) );
	elseif ( !$mysql_compat )
		return new WP_Error( 'mysql_not_compatible', sprintf( __('The update cannot be installed because WordPress %1$s requires MySQL version %2$s or higher. You are running version %3$s.'), $wp_version, $required_mysql_version, $mysql_version ) );

	/** This filter is documented in wpManut/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Preparing to install the latest version&#8230;' ) );

	// Don't copy wp-content, we'll deal with that below
	// We also copy version.php last so failed updates report their old version
	$skip = array( 'wp-content', 'wp-includes/version.php' );
	$check_is_writable = array();

	// Check to see which files don't really need updating - only available for 3.7 and higher
	if ( function_exists( 'get_core_checksums' ) ) {
		// Find the local version of the working directory
		$working_dir_local = WP_CONTENT_DIR . '/upgrade/' . basename( $from ) . $distro;

		$checksums = get_core_checksums( $wp_version, isset( $wp_local_package ) ? $wp_local_package : 'en_US' );
		if ( is_array( $checksums ) && isset( $checksums[ $wp_version ] ) )
			$checksums = $checksums[ $wp_version ]; // Compat code for 3.7-beta2
		if ( is_array( $checksums ) ) {
			foreach( $checksums as $file => $checksum ) {
				if ( 'wp-content' == substr( $file, 0, 10 ) )
					continue;
				if ( ! file_exists( ABSPATH . $file ) )
					continue;
				if ( ! file_exists( $working_dir_local . $file ) )
					continue;
				if ( md5_file( ABSPATH . $file ) === $checksum )
					$skip[] = $file;
				else
					$check_is_writable[ $file ] = ABSPATH . $file;
			}
		}
	}

	// If we're using the direct method, we can predict write failures that are due to permissions.
	if ( $check_is_writable && 'direct' === $wp_filesystem->method ) {
		$files_writable = array_filter( $check_is_writable, array( $wp_filesystem, 'is_writable' ) );
		if ( $files_writable !== $check_is_writable ) {
			$files_not_writable = array_diff_key( $check_is_writable, $files_writable );
			foreach ( $files_not_writable as $relative_file_not_writable => $file_not_writable ) {
				// If the writable check failed, chmod file to 0644 and try again, same as copy_dir().
				$wp_filesystem->chmod( $file_not_writable, FS_CHMOD_FILE );
				if ( $wp_filesystem->is_writable( $file_not_writable ) )
					unset( $files_not_writable[ $relative_file_not_writable ] );
			}

			// Store package-relative paths (the key) of non-writable files in the WP_Error object.
			$error_data = version_compare( $old_wp_version, '3.7-beta2', '>' ) ? array_keys( $files_not_writable ) : '';

			if ( $files_not_writable )
				return new WP_Error( 'files_not_writable', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), implode( ', ', $error_data ) );
		}
	}

	/** This filter is documented in wpManut/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Enabling Maintenance mode&#8230;' ) );
	// Create maintenance file to signal that we are upgrading
	$maintenance_string = '<?php $upgrading = ' . time() . '; ?>';
	$maintenance_file = $to . '.maintenance';
	$wp_filesystem->delete($maintenance_file);
	$wp_filesystem->put_contents($maintenance_file, $maintenance_string, FS_CHMOD_FILE);

	/** This filter is documented in wpManut/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Copying the required files&#8230;' ) );
	// Copy new versions of WP files into place.
	$result = _copy_dir( $from . $distro, $to, $skip );
	if ( is_wp_error( $result ) )
		$result = new WP_Error( $result->get_error_code(), $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );

	// Since we know the core files have copied over, we can now copy the version file
	if ( ! is_wp_error( $result ) ) {
		if ( ! $wp_filesystem->copy( $from . $distro . 'wp-includes/version.php', $to . 'wp-includes/version.php', true /* overwrite */ ) ) {
			$wp_filesystem->delete( $from, true );
			$result = new WP_Error( 'copy_failed_for_version_file', __( 'The update cannot be installed because we will be unable to copy some files. This is usually due to inconsistent file permissions.' ), 'wp-includes/version.php' );
		}
		$wp_filesystem->chmod( $to . 'wp-includes/version.php', FS_CHMOD_FILE );
	}

	// Check to make sure everything copied correctly, ignoring the contents of wp-content
	$skip = array( 'wp-content' );
	$failed = array();
	if ( isset( $checksums ) && is_array( $checksums ) ) {
		foreach ( $checksums as $file => $checksum ) {
			if ( 'wp-content' == substr( $file, 0, 10 ) )
				continue;
			if ( ! file_exists( $working_dir_local . $file ) )
				continue;
			if ( file_exists( ABSPATH . $file ) && md5_file( ABSPATH . $file ) == $checksum )
				$skip[] = $file;
			else
				$failed[] = $file;
		}
	}

	// Some files didn't copy properly
	if ( ! empty( $failed ) ) {
		$total_size = 0;
		foreach ( $failed as $file ) {
			if ( file_exists( $working_dir_local . $file ) )
				$total_size += filesize( $working_dir_local . $file );
		}

		// If we don't have enough free space, it isn't worth trying again.
		// Unlikely to be hit due to the check in unzip_file().
		$available_space = @disk_free_space( ABSPATH );
		if ( $available_space && $total_size >= $available_space ) {
			$result = new WP_Error( 'disk_full', __( 'There is not enough free disk space to complete the update.' ) );
		} else {
			$result = _copy_dir( $from . $distro, $to, $skip );
			if ( is_wp_error( $result ) )
				$result = new WP_Error( $result->get_error_code() . '_retry', $result->get_error_message(), substr( $result->get_error_data(), strlen( $to ) ) );
		}
	}

	// Custom Content Directory needs updating now.
	// Copy Languages
	if ( !is_wp_error($result) && $wp_filesystem->is_dir($from . $distro . 'wp-content/languages') ) {
		if ( WP_LANG_DIR != ABSPATH . WPINC . '/languages' || @is_dir(WP_LANG_DIR) )
			$lang_dir = WP_LANG_DIR;
		else
			$lang_dir = WP_CONTENT_DIR . '/languages';

		if ( !@is_dir($lang_dir) && 0 === strpos($lang_dir, ABSPATH) ) { // Check the language directory exists first
			$wp_filesystem->mkdir($to . str_replace(ABSPATH, '', $lang_dir), FS_CHMOD_DIR); // If it's within the ABSPATH we can handle it here, otherwise they're out of luck.
			clearstatcache(); // for FTP, Need to clear the stat cache
		}

		if ( @is_dir($lang_dir) ) {
			$wp_lang_dir = $wp_filesystem->find_folder($lang_dir);
			if ( $wp_lang_dir ) {
				$result = copy_dir($from . $distro . 'wp-content/languages/', $wp_lang_dir);
				if ( is_wp_error( $result ) )
					$result = new WP_Error( $result->get_error_code() . '_languages', $result->get_error_message(), substr( $result->get_error_data(), strlen( $wp_lang_dir ) ) );
			}
		}
	}

	/** This filter is documented in wpManut/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Disabling Maintenance mode&#8230;' ) );
	// Remove maintenance file, we're done with potential site-breaking changes
	$wp_filesystem->delete( $maintenance_file );

	// 3.5 -> 3.5+ - an empty twentytwelve directory was created upon upgrade to 3.5 for some users, preventing installation of Twenty Twelve.
	if ( '3.5' == $old_wp_version ) {
		if ( is_dir( WP_CONTENT_DIR . '/themes/twentytwelve' ) && ! file_exists( WP_CONTENT_DIR . '/themes/twentytwelve/style.css' )  ) {
			$wp_filesystem->delete( $wp_filesystem->wp_themes_dir() . 'twentytwelve/' );
		}
	}

	// Copy New bundled plugins & themes
	// This gives us the ability to install new plugins & themes bundled with future versions of WordPress whilst avoiding the re-install upon upgrade issue.
	// $development_build controls us overwriting bundled themes and plugins when a non-stable release is being updated
	if ( !is_wp_error($result) && ( ! defined('CORE_UPGRADE_SKIP_NEW_BUNDLED') || ! CORE_UPGRADE_SKIP_NEW_BUNDLED ) ) {
		foreach ( (array) $_new_bundled_files as $file => $introduced_version ) {
			// If a $development_build or if $introduced version is greater than what the site was previously running
			if ( $development_build || version_compare( $introduced_version, $old_wp_version, '>' ) ) {
				$directory = ('/' == $file[ strlen($file)-1 ]);
				list($type, $filename) = explode('/', $file, 2);

				// Check to see if the bundled items exist before attempting to copy them
				if ( ! $wp_filesystem->exists( $from . $distro . 'wp-content/' . $file ) )
					continue;

				if ( 'plugins' == $type )
					$dest = $wp_filesystem->wp_plugins_dir();
				elseif ( 'themes' == $type )
					$dest = trailingslashit($wp_filesystem->wp_themes_dir()); // Back-compat, ::wp_themes_dir() did not return trailingslash'd pre-3.2
				else
					continue;

				if ( ! $directory ) {
					if ( ! $development_build && $wp_filesystem->exists( $dest . $filename ) )
						continue;

					if ( ! $wp_filesystem->copy($from . $distro . 'wp-content/' . $file, $dest . $filename, FS_CHMOD_FILE) )
						$result = new WP_Error( "copy_failed_for_new_bundled_$type", __( 'Could not copy file.' ), $dest . $filename );
				} else {
					if ( ! $development_build && $wp_filesystem->is_dir( $dest . $filename ) )
						continue;

					$wp_filesystem->mkdir($dest . $filename, FS_CHMOD_DIR);
					$_result = copy_dir( $from . $distro . 'wp-content/' . $file, $dest . $filename);

					// If a error occurs partway through this final step, keep the error flowing through, but keep process going.
					if ( is_wp_error( $_result ) ) {
						if ( ! is_wp_error( $result ) )
							$result = new WP_Error;
						$result->add( $_result->get_error_code() . "_$type", $_result->get_error_message(), substr( $_result->get_error_data(), strlen( $dest ) ) );
					}
				}
			}
		} //end foreach
	}

	// Handle $result error from the above blocks
	if ( is_wp_error($result) ) {
		$wp_filesystem->delete($from, true);
		return $result;
	}

	// Remove old files
	foreach ( $_old_files as $old_file ) {
		$old_file = $to . $old_file;
		if ( !$wp_filesystem->exists($old_file) )
			continue;
		$wp_filesystem->delete($old_file, true);
	}

	// Upgrade DB with separate request
	/** This filter is documented in wpManut/includes/update-core.php */
	apply_filters( 'update_feedback', __( 'Upgrading database&#8230;' ) );
	$db_upgrade_url = admin_url('upgrade.php?step=upgrade_db');
	wp_remote_post($db_upgrade_url, array('timeout' => 60));

	// Clear the cache to prevent an update_option() from saving a stale db_version to the cache
	wp_cache_flush();
	// (Not all cache backends listen to 'flush')
	wp_cache_delete( 'alloptions', 'options' );

	// Remove working directory
	$wp_filesystem->delete($from, true);

	// Force refresh of update information
	if ( function_exists('delete_site_transient') )
		delete_site_transient('update_core');
	else
		delete_option('update_core');

	/**
	 * Fires after WordPress core has been successfully updated.
	 *
	 * @since 3.3.0
	 *
	 * @param string $wp_version The current WordPress version.
	 */
	do_action( '_core_updated_successfully', $wp_version );

	// Clear the option that blocks auto updates after failures, now that we've been successful.
	if ( function_exists( 'delete_site_option' ) )
		delete_site_option( 'auto_core_update_failed' );

	return $wp_version;
}

/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This is a temporary function for the 3.1 -> 3.2 upgrade, as well as for those upgrading to
 * 3.7+
 *
 * @ignore
 * @since 3.2.0
 * @since 3.7.0 Updated not to use a regular expression for the skip list
 * @see copy_dir()
 *
 * @param string $from source directory
 * @param string $to destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function _copy_dir($from, $to, $skip_list = array() ) {
	global $wp_filesystem;

	$dirlist = $wp_filesystem->dirlist($from);

	$from = trailingslashit($from);
	$to = trailingslashit($to);

	foreach ( (array) $dirlist as $filename => $fileinfo ) {
		if ( in_array( $filename, $skip_list ) )
			continue;

		if ( 'f' == $fileinfo['type'] ) {
			if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) ) {
				// If copy failed, chmod file to 0644 and try again.
				$wp_filesystem->chmod( $to . $filename, FS_CHMOD_FILE );
				if ( ! $wp_filesystem->copy($from . $filename, $to . $filename, true, FS_CHMOD_FILE) )
					return new WP_Error( 'copy_failed__copy_dir', __( 'Could not copy file.' ), $to . $filename );
			}
		} elseif ( 'd' == $fileinfo['type'] ) {
			if ( !$wp_filesystem->is_dir($to . $filename) ) {
				if ( !$wp_filesystem->mkdir($to . $filename, FS_CHMOD_DIR) )
					return new WP_Error( 'mkdir_failed__copy_dir', __( 'Could not create directory.' ), $to . $filename );
			}

			/*
			 * Generate the $sub_skip_list for the subdirectory as a sub-set
			 * of the existing $skip_list.
			 */
			$sub_skip_list = array();
			foreach ( $skip_list as $skip_item ) {
				if ( 0 === strpos( $skip_item, $filename . '/' ) )
					$sub_skip_list[] = preg_replace( '!^' . preg_quote( $filename, '!' ) . '/!i', '', $skip_item );
			}

			$result = _copy_dir($from . $filename, $to . $filename, $sub_skip_list);
			if ( is_wp_error($result) )
				return $result;
		}
	}
	return true;
}

/**
 * Redirect to the About WordPress page after a successful upgrade.
 *
 * This function is only needed when the existing install is older than 3.4.0.
 *
 * @since 3.3.0
 *
 */
function _redirect_to_about_wordpress( $new_version ) {
	global $wp_version, $pagenow, $action;

	if ( version_compare( $wp_version, '3.4-RC1', '>=' ) )
		return;

	// Ensure we only run this on the update-core.php page. The Core_Upgrader may be used in other contexts.
	if ( 'update-core.php' != $pagenow )
		return;

 	if ( 'do-core-upgrade' != $action && 'do-core-reinstall' != $action )
 		return;

	// Load the updated default text localization domain for new strings.
	load_default_textdomain();

	// See do_core_upgrade()
	show_message( __('WordPress updated successfully') );

	// self_admin_url() won't exist when upgrading from <= 3.0, so relative URLs are intentional.
	show_message( '<span class="hide-if-no-js">' . sprintf( __( 'Welcome to WordPress %1$s. You will be redirected to the About WordPress screen. If not, click <a href="%2$s">here</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	show_message( '<span class="hide-if-js">' . sprintf( __( 'Welcome to WordPress %1$s. <a href="%2$s">Learn more</a>.' ), $new_version, 'about.php?updated' ) . '</span>' );
	echo '</div>';
	?>
<script type="text/javascript">
window.location = 'about.php?updated';
</script>
	<?php

	// Include admin-footer.php and exit.
	include(ABSPATH . 'wpManut/admin-footer.php');
	exit();
}
add_action( '_core_updated_successfully', '_redirect_to_about_wordpress' );
