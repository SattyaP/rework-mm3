export function animateNavbar() {
    $(".menu-hamburger").on("click", () => {
        $(".menu-hamburger").toggleClass("opened");
        $(".sidebar").toggleClass("sidebar-hide");
        $(".menu-hamburger").attr("aria-expanded", $(".menu-hamburger").hasClass("opened"));
    });
    setTimeout(() => {
        $("nav.navbar").toggleClass("hide");
    }, 100);
    setTimeout(() => {
        $("#socialmedia").toggleClass("dissmised");
    }, 600);
};

