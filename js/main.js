 function configureDropDownLists(ddl1,ddl2,ddl3) {
        var mining = new Array('Subject', 'IMT', 'MM-I', 'SURFACE', 'NONE');
        var eee = new Array('Square', 'Circle', 'Triangle');
        var civil = new Array('John', 'David', 'Sarah');
    
        switch (ddl1.value) {
            case 'mining':
                ddl2.options.length = 0;
                for (i = 0; i < mining.length; i++) {
                    createOption(ddl2, mining[i], mining[i]);
                }
                ddl3.options.length = 0;
                for (i = 0; i < mining.length; i++) {
                    createOption(ddl3, mining[i], mining[i]);
                }
                
                break;
            case 'Shapes':
                ddl2.options.length = 0; 
            for (i = 0; i < shapes.length; i++) {
                createOption(ddl2, shapes[i], shapes[i]);
                }
                break;
            case 'Names':
                ddl2.options.length = 0;
                for (i = 0; i < names.length; i++) {
                    createOption(ddl2, names[i], names[i]);
                }
                break;
                default:
                    ddl2.options.length = 0;
                break;
        }

    }


    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
switch (ddl1.value) {
            case 'mining':
                ddl3.options.length = 0;
                for (i = 0; i < mining.length; i++) {
                    createOption(ddl2, mining[i], mining[i]);
                }
                break;
}
function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }