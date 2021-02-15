let link = './COSMOS_table';
let html = new GethtmlAjax();

html.getHtml(link);
setInterval(() => html.getHtml(link), 5000);