const Ziggy = {"url":"","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"blog.index":{"uri":"blog","methods":["GET","HEAD"]},"blog.create":{"uri":"blog\/create","methods":["GET","HEAD"]},"blog.store":{"uri":"blog","methods":["POST"]},"blog.show":{"uri":"blog\/{blog}","methods":["GET","HEAD"],"parameters":["blog"]},"blog.edit":{"uri":"blog\/{blog}\/edit","methods":["GET","HEAD"],"parameters":["blog"]},"blog.update":{"uri":"blog\/{blog}","methods":["PUT","PATCH"],"parameters":["blog"]},"blog.destroy":{"uri":"blog\/{blog}","methods":["DELETE"],"parameters":["blog"]},"blog-details.index":{"uri":"blog-details","methods":["GET","HEAD"]},"blog-details.create":{"uri":"blog-details\/create","methods":["GET","HEAD"]},"blog-details.store":{"uri":"blog-details","methods":["POST"]},"blog-details.show":{"uri":"blog-details\/{blog_detail}","methods":["GET","HEAD"],"parameters":["blog_detail"]},"blog-details.edit":{"uri":"blog-details\/{blog_detail}\/edit","methods":["GET","HEAD"],"parameters":["blog_detail"]},"blog-details.update":{"uri":"blog-details\/{blog_detail}","methods":["PUT","PATCH"],"parameters":["blog_detail"]},"blog-details.destroy":{"uri":"blog-details\/{blog_detail}","methods":["DELETE"],"parameters":["blog_detail"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
export function route(name) {
    if (!Ziggy.routes[name]) {
        console.error(`Route '${name}' not found.`);
        return '';
    }

    return Ziggy.url + '/' + Ziggy.routes[name].uri;
}
