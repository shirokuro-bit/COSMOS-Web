let link = './COSMOS_table.php';
let html = new GethtmlAjax();

html.getHtml(link);
setInterval(() => html.getHtml(link), 5000);
