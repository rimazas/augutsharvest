// define cmsms_tiny object
var cmsms_tiny = {};

// this is the actual tinymce initialization
tinymce.init({
    selector: 'textarea.MicroTiny',
    language: 'en',
    cmsms_tiny: cmsms_tiny = {
        schema: 'html5',
        base_url : 'http://augustharvest.dev/share/',
        resize : true,
        statusbar : true,
        menubar : true,
        filepicker_title : 'CMSMS File picker',
        filepicker_url : 'http://augustharvest.dev/share/admin/moduleinterface.php?mact=MicroTiny,m1_,filepicker,0&_sk_=acfdb33e03f0aae4&showtemplate=false&field=',
        filebrowser_title : 'Select a file',
        linker_text : 'Link to CMSMS Page',
        linker_title : 'Create a link to a CMSMS content page',
        linker_image : 'http://augustharvest.dev/share/modules/MicroTiny/lib/images/cmsmslink.gif',
        linker_url : 'http://augustharvest.dev/share/admin/moduleinterface.php?mact=MicroTiny,m1_,linker,0&_sk_=acfdb33e03f0aae4&showtemplate=false',
        linker_autocomplete_url : 'http://augustharvest.dev/share/admin/moduleinterface.php?mact=MicroTiny,m1_,ajax_getpages,0&_sk_=acfdb33e03f0aae4&showtemplate=false',
        prompt_page : 'Enter Page title',
        prompt_page_info : 'This is an auto complete field. Begin by typing a few characters of the desired page alias, menu text, or title. Any matching items will be displayed in a list.',
        prompt_alias : 'Selected Page alias',
        prompt_alias_info : 'This field is read only',
        prompt_text : 'Text to display',
        prompt_class : 'Class attribute',
        prompt_rel : 'Rel attribute',
        prompt_target : 'Target',
        tab_general : 'General',
        tab_advanced : 'Advanced',
        target_none : 'None',
        target_new_window : 'New window',
        loading_info : 'Loading...'
    },
    document_base_url: cmsms_tiny.base_url,
    relative_urls: true,
    mysamplesetting: 'foobar',
    menubar: cmsms_tiny.menubar,
    statusbar: cmsms_tiny.statusbar,
    resize: cmsms_tiny.resize,
    removed_menuitems: 'newdocument',
    browser_spellcheck: true,
    // smarty logic stuff
    image_advtab: true,
    toolbar: 'undo redo | cut copy paste | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify indent outdent | bullist numlist | anchor link unlink cmsms_linker | image cmsms_filebrowser',
    plugins: ['paste autolink link cmsms_linker charmap anchor searchreplace wordcount code fullscreen insertdatetime  media image cmsms_filepicker cmsms_filebrowser'],
    // callback functions
    urlconverter_callback: function(url, elm, onsave, name) {
        var self = this;
        var settings = self.settings;

        if (!settings.convert_urls || ( elm && elm.nodeName == 'LINK' ) || url.indexOf('file:') === 0 || url.length === 0) {
            return url;
        }

        // fix entities in cms_selflink urls.
        if (url.indexOf('cms_selflink') != -1) {
            decodeURI(url);
            url = url.replace('%20', ' ');
            return url;
        }
        // Convert to relative
        if (settings.relative_urls) {
            return self.documentBaseURI.toRelative(url);
        }
        // Convert to absolute
        url = self.documentBaseURI.toAbsolute(url, settings.remove_script_host);

        return url;
    },
    setup: function(editor) {
        editor.on('change', function(e) {
            $(document).trigger('cmsms_formchange');
        });
    },
    paste_as_text: true,
});
