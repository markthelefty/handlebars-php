(function() {
    var context =
        {
            projectName: 'Handlebars Demo',
            heroHeadline: 'Hello Handlebars 002',
            heroText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consequat arcu vitae erat mollis quis molestie nisi vehicula. Etiam accumsan convallis vestibulum. Nulla facilisi. Quisque gravida dignissim massa, nec interdum velit sagittis at.',
            heading1: 'Heading One',
            heading2: 'Heading Two',
            heading3: 'Heading Three',
            text1: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consequat arcu vitae erat mollis quis molestie nisi vehicula. Etiam accumsan convallis vestibulum. Nulla facilisi. Quisque gravida dignissim massa, nec interdum velit sagittis at.',
            text2: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consequat arcu vitae erat mollis quis molestie nisi vehicula. Etiam accumsan convallis vestibulum. Nulla facilisi. Quisque gravida dignissim massa, nec interdum velit sagittis at.',
            text3: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consequat arcu vitae erat mollis quis molestie nisi vehicula. Etiam accumsan convallis vestibulum. Nulla facilisi. Quisque gravida dignissim massa, nec interdum velit sagittis at.'
        },

        template = Handlebars.compile( $('#template').html() );
        $('body').append( template(context) );
})();