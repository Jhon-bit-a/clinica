<x-app-layout>
    <style>
        .juice {
            background-image: url('https://i.ibb.co/SN2Sp4T/juice.png');
        }

        .juice2 {
            background-image: url('https://www.neosalut.com/wp-content/uploads/comunicacion-asertiva-clinica-dental-800x400.jpg');
        }

        .juice3 {
            z-index: 10;
            position: relative;
        }

        .juice3::after {
            content: '';
            position: absolute;
            opacity: .2;
            z-index: -999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url('https://previews.123rf.com/images/kurhan/kurhan1611/kurhan161100913/66196829-grupo-de-m%C3%A9dicos-sobre-fondo-azul-cl%C3%ADnica-.jpg?fj=1');
        }

        .text-primary {
            color: #f9b529;
        }

        .text-primary-lite {
            color: #fac251;
        }

        .text-secondary {
            color: #294356;
        }

        .text-secondary-lite {
            color: #d5dee5;
        }

        .bg-primary {
            background-color: #f9b529;
        }

        .bg-primary-lite {
            background-color: #fac251;
        }

        .bg-secondary {
            background-color: #294356;
        }

        .bg-secondary-lite {
            background-color: #d5dee5;
        }

        .product {
            background-image: url('https://thumbs.dreamstime.com/z/crema-dental-y-cepillo-de-dientes-de-colgate-56551751.jpg');
        }
        .product2 {
            background-image: url('https://i.ibb.co/1fZMKPh/2021-11-07-14h08-07.png');
        }
        .product3 {
            background-image: url('https://i.ibb.co/f9tpvV3/2021-11-07-14h08-32.png');
        }
        .product4 {
            background-image: url('https://i.ibb.co/42BsKQ2/2021-11-07-14h08-17.png');
        }
        .whatsapp {
            position: fixed;
            right:25px; /Margen derecho/
            bottom:20px; /Margen abajo/
            z-index:999;
        }
        .whatsapp img {
            width:60px; /Alto del icono/
            height:60px; /Ancho del icono/
        }
        .whatsapp:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

        .facebook {
            position: fixed;
            right:25px; /Margen derecho/
            bottom:90px; /Margen abajo/
            z-index:999;
        }
        .facebook img {
            width:60px; /Alto del icono/
            height:60px; /Ancho del icono/
        }
        .facebook:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

        .telegram {
            position: fixed;
            right:25px; /Margen derecho/
            bottom:160px; /Margen abajo/
            z-index:999;
        }

        .telegram img {
            width:60px; /Alto del icono/
            height:60px; /Ancho del icono/
        }
        .telegram:hover{
            opacity: 0.7 !important;
            filter: alpha(opacity=70) !important;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="min-h-screen bg-white">
                        <!-- body -->
                        <main>

                            <div class="whatsapp">
                                <a href="https://api.whatsapp.com/send?phone=59175173379&text=Hola!%20Quisiera%20saber%20mas%20sobre%20la%20pagina"
                                    target="_blank" title="Contactame por Whatsapp">
                                    <img src="https://www.peengler.com/wp-content/uploads/whatsapp.png" alt="WhatsApp" />
                                </a>
                            </div>
                        <br>
                        <br>
                        <br>
                        <br>
                            <div class="facebook">
                                <a href="https://m.me/profile.php?id=10003594247530" target="_blank" title="Contactame por Messenger">
                                    <img src="https://www.peengler.com/wp-content/uploads/messenger.png" alt="Messenger" />
                                </a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="telegram">
                                <a href="https://t.me/Jhonbita" target="_blank" title="Contactame por Telegram">
                                    <img src="https://pngimg.com/uploads/telegram/telegram_PNG34.png" alt="Telegram" />
                                </a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <section class="juice3 bg-gray-100 bg-opacity-90 py-10">
                                <div class="container mx-auto px-4 flex flex-col lg:flex-row">
                                    <div class="juice2 mt-6 lg:mt-0 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                                        <div class="max-w-sm">
                                            <p class="text-3xl md:text-4xl font-semibold uppercase">20% DE DESCUENTO</p>
                                            <p class="mt-8 font-semibold">ORTODONLOGIA<br /></p>
                                            <button class="mt-20 bg-white font-semibold px-8 py-2 rounded">Descuento solo hoy</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="container mx-auto pt-12 bg-white">
                                <!-- title -->
                                <div class="relative flex items-end font-bold">
                                    <h2 class="text-2xl">Nuestro Servicio</h2>
                                    <a href class="ml-10 flex items-center text-gray-400">
                                        <span class="text-sm">Catergorias</span>
                                        <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                    </a>
                                    <div class="ml-auto flex">
                                        <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                        </a>
                                        <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-yellow-400">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- cards -->
                                <div class="mt-10">
                                    <ul class="-m-3.5 flex">
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhIWFRUWGBgVGBUWGBcXFxcVFRcXGBcVFhgYHSggGBolGxUXITEhJSkrLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGy0lICYvLS0vLSstLS0tLS8tLy0tLS0vLy0tLS0tLS0tLS0tLS0tLS0tKy0tLS0tLS0vLS0tLf/AABEIAMUBAAMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAwQFBgECBwj/xABHEAABAwEFAwgHAwkIAwEAAAABAAIDEQQFEiExQVFhBhMicYGRobEVMkJSwdHwB5LhFBYjU1RicrLxMzRDZIKTotIkY9Pi/8QAGwEAAgMBAQEAAAAAAAAAAAAAAAQCAwUBBgf/xAA/EQABAwIDAwoDBAkFAQAAAAABAAIRAyEEMUEFElETImFxgZGhsdHwFDLBQlJy4QYVI1NikqLS8SQzc4KyFv/aAAwDAQACEQMRAD8A7ihCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhaucAknT7gugEqJcBml1riCbOeTtWFIMVZq8E5Mg3rHOhMHWqMGhkYDuLhXzW0czXeq5p6iD5IgLhe/OE954LIcN6bIXdwI5Up4hM2uI0KWZNvUS0qbagKWQhCirEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEISb5QOKRfISpBpKg54CWfKAkXyk8FqhTDQFS55KEIQuqCFHX85wgk5uuKlBTXMgGnGhKkU2tx6B7PNU4ieSdFrHyV2GMVmGJuLcb5dqqUfJyPAA4vDqCpBFK7ciNEclrppaXkl1ItCBQOcRShPUa0+jOMYSaBS0UYaKD6J1KxcFgWOqB8QGnvOncblb+M2rWbTdTLiS8EZ5A594kR0zolEIQvQLzSEIQhC2jkp1Jw01TVZjfRRc2VYx8WOSdoQhVphCEIQhCEIQhCEIQhCEIQhCEIQhCEm+UDikHyEqQaSoOqAJZ8oHFJueTVaLIOuXmpQAqS8lYWXbFivAeKy48PNSUVq0LKy08PNYJ4eaEITe22yOFhkleGMGrnGg6uJ4DNKuNBXz0XB78vqe1PxTuzGQYMms3hrdnWc95TWFw3LuImAM+N/8ZpfEV+SaDGeSt99/aS8uw2RgDR7cgq53ENrRo66nqTa7ftAcSRam4hscwAEcC2oB6696o6Fq1NnYapT5Nzbds9/sdCQp46ux++038O5dJur7QY+fLJI8MDqBslOm07ecAJBbXdpx2dBY4EAgggioIzBB0IO0LzqugfZnyifjFjeC5hBMZ1LKAuLT+4aHqPXkriNnsp0waIgAZdHHr48fNijjXVHnlMzr9PRdNXKvtD5QWgtkLZ3WaBrubjbHUTWiQavc4EFkdQaAHMCprUBdNtuLm3YPWoaU17OK4x9pjI8EZe54kGIMYKYTm3GX7QaUosF9YjEU6Q+1mYnsGnWdBdbVGi00KlYxzcgTGep+g1NimHJP7R7VZXgTSPtEPtNkdieOLJHZ9hqKbtV1WxctIpmB8THVrRzXZUNNjhUHX+i86rr3IuxE2ezRgUc5jXHrcK1PZl2Lcp0KTpLh71leZ2njK1Cm1tL5nGBae6bdF+K6dY7SJGB7RQH4ZJdaRRhrQ1ugpTsW6zTE2yWwze3RvmTrGU6wlYH7EumYTpjqiqrcNUzSdotkIQoK1CEIQhCEIQhCEm+UBIPkJUg0lQdUAS75QOKQfISsIUw0BUOeShCFBXjfVDhiod79R/pG3rVVfEMoN3nn1KtoYepXdusHoFOoBVNNulrXnX16zTu0UpYL92TCn7w0/1DZ1hJ0tqUXugy3pOX5JyrsqtTbvNId0DP8/NTwC2c07kkx4IBBqDoRoUo5aWazetDWnctS0oBSFsdRh45d6g9240uOikxu+4NGqayPdIaDT6zKpN7fZ5LJanOjkY2J5xkmpLXO9ZoaNc8xmBnwV3inaxu9xzI8qpva7wkp0APiO9UYTEOwoNaSXOF7T2AcfzCdxGDdiQKYaAwG027Z9yuIWuMNe9rTVrXOAO8AkA9oSS6AOSVmdkQ6J2yjstNocD5qHvTkVNGMUThM33QKO+7o7sNeC9HhNr4XEAbro/FY9tyB396w8TsbF0LloP4b+EA+ChLmu82iZkLSGl5IBOlQ0kV4ZLpXJjk0bE3HIQZnjMjMMGuAHbxPyVG5D9G3w1Hql+XERvy711CWfpZuFdapPblV0cjMAgE95t4eCb2FhQ8mtGUjjoPc9KVvC+DHC94YS5rSeGQJr15aLzdbrY+aR0sjsT3GpPwG4cF27lxej7PYpHx+ucLASKgYzQuodciddtFwlKYFpu8mdB9e8xPUE1tFrKZbTYI1PkO68DTtTy57LztohjpiDpGYwdDGDjkrwwAr0LyUseTpT1N8armf2cXS0x86GHnZHOYHH3AQBg3AnXqXabPAI2hg0aKdu3vKeru3KW6M3eS8zQaMVjzUI5tK1/vHUdXp2R9ntjzaXxkjANBTTLWuqlVA2P++yfXshTyVrNAIjgPJaGAqOex5cZ57x2A2HYhK2d2xJuWGGhVBEhPtMGU8QhCqTSEIQhCEjLJsC3kdQJsptE3VVR8WCEIQQpqhCEKuX1emKscZ6PtOG3gOHn50YjEMoM3ndg4+/BMYbDPxD9xvaeHvQa95GL5vYOBaw0aPWd728D93z6taVbr4cThiNGjb734Kans3ONMYrV2WWeeoy26LWzcjsBYZ3khxwlrTQiu0u39XeobF+HxD31sRd4MBpEtAibaE5iDlE5kFc2+7FYWmyhhubTN3OBhxMxc5gZEkZ5WAILe6bw57E0NJMYBcQCWgHKhOw8Pxo/Uvd1kjstpdE1oZHI1vNjZVoo6pOpJ365La9ropV8Yy2t3cRw4JPa2zWsfymHHNIBjhOcdEzbTqy0Nj7VdUZyWIPOBLZ4wbTwJEEcZGpkx9htz4j0TltadD8jxCs0Fva4CvRJFaHv1VThbVwG8+G3wUyqNmVKgab83Qe+jzWhjcLTqEEiDxH14qbDwdCO8JjeEwyANda035fXamXnpl3LFOHetGs7lGFmSSo4JtN+9MoHZl21QPrsWUHjt2lRTqQtNnDhuOz8Uxa98Zp/Q9Sla/JayRgihFR8UrXw2+d9hh3Hj1++uVYypAg3CiHRQ86LQ1lJQC07jX2nbyBl2pvaZXUJGbjQCu1ztPrgpVt3iubsvFN4Wh0xdQBkIo07MZHS+We9FKhWxDw7E/KwZcYyHUSYPQTEKmu9lJm5Rs55z4Tm640AJvYkAHNQnKyztEYZITK5+ZxZig3MOVK6fwhUmLk9BzrXOD8ANXRg5HcK6gV4qw3rbTNK5+wmgG4DZ9byi6bMXyAUrTpEbzsHevb0KO7SAqXOZ6z6ZWtbJfM9o47erPfSJDchBuQMjxJOcm8kXV35G2VpHONAwMADcIoBkRhA2U3K2OOZy81AcloMPP4c2GXI7C4NGMjhi28FPErHxTt6qT3La2bh/h8M1kQbk9c+4UFYz/wCbJ9eyFO14DxUDY/77J9eyFPIxHzN/C3yUNm/I/wD5H+ay48PNYWXFYVAWiU5jOQW6Qs5yKXVRzTLTICEIQuKSQtB0SS3n1WitbklX/MUBpWjpG4i2oxbjkezetwmV6AEdKMuG8UJB4g7FGo4tE+v0/NWUWNe7dM36vrn1TPBRt93lWscemjnD+WqirHYnSGjB1nYOsqXZYTMdObhboNrjtd+KmIYWsGFooBsH1msj4OpiapqVTzfdhwHSbnOMo1jjKeEpcnSHO1m8HpjM9Ayyni2sF3NiGWbtrj5DcEtbLK2VhY7bod1NE4IQtikwUgAy0ZQsWuTWJ5XnTnKgbdZ5XM5uWHnQNJGvaHDjofJIWeGfC50VpcSzWORu7ZiJ4GnwVlUZEKWmXi0E9dBmnWVjukAC18raaGY7IWVUwobUYS4mTu5w4WcRzm7pMREP3rKPjjbK1loaMOKoczZjzqQdgyPelK/0Ta5Hf+LGP3n+adV46aELMxNFlKu9rBA3ivVbJr1K+CpVKhkloR30+JR3Ipw03oCpWgj6PmhH0Cmt42jm2OeMjkBxqaV+Pap02OqODG5m3eqq1ZlGm6q/JoJPULlYntoa7CAXu90ZZ9e1Jc/aP2cb/Xb80vYbMI2htM/aroU5+upXuq0mGGMDhxdN+wEADv60lToYmqN+rVcwn7LAyG9BLmOLiNTYTkOMTa7wnY0kxAVo31wakmtABrmoi8rRLDAInR4S+tXYgduJ5NOumanCecnp7MQ7C5wy+6O4qn33beemc72dG9X45laeCa2o8N3GiIcY3s/s5uPXe0EjRYW1nvoUy8VnkkljZ3Li3KEwwGJAbaDIziwj1aLjgdHFjaP0jiGxj9+TJn3W9LgaqBu6z43gbBmeobO0roNyWSspJ9WzgsHGV4HOH/SOgtHFVAxl/f8Ak27Z0XmcHRNauGjJt+3Tuu7/AKxqpu77I2GJkTdGCld52u7TU9qcoQsAkkyc160AAQMlBWP++yfXshTqgrH/AH2T69kKdV2I+Yfhb5JDZvyP/wCR/mhCFoHCtKiozptodMuxULQS1nOacppEcwnardmr6RshCEKKtTafXsWiVtGxJK1uSVf8xQKLLqVKwsErq5K2aBTILGXFA0KEIJWXUWFlywgIKFFh1LRKTsZXuAUooy8bK/EZIzngLXNPtDhVWUyLgmJEJbEtdDXAE7rgSBnEEW4xMqockr7D4CJDHHgcQ0EgEg5knEc9eGimxb4v10dP42/NUuO6WnSBhplkwGh3aLb0KP2cf7Y+S0sRstlWq5+/EmYgeqRwn6SmhQZSbQJDRGf5FXL8vi/WxdeNvzWPSUP66Ov8bfmqay6WEVEDCN4YD8EG6G1pzDKnQYBn4Kn9T0/3ngPVMf8A1zv3Hj+SuPpKH9dF99nzTS9rZG+OjJGOOtGuBNMq6FVl10NAJMDQBmSWAAAak5JGIQtNW80DpUYBkraOy2U6geHzBnL80tjP0nOIoPomlG8CJnj2K+ttDHAEPYQdocCPAptbb1jjDjzjK59HEM8sxStVTIrFC4EtjiIaKkhrSGjeaaDI9ySdDBTo82DsIwBVN2NTBu+Rwj80zU/S9zgYpQTkZmDxiE6byl6BiiFQQccrtrna4WjtGezYFErcsGrWtaNOhShIpXMZHXxCUs0Be6gBO00FchqtanSZTnd1uev33Lz+Jxb8QQX6CAOAHu5zOpKn+T8JjjM1OllgHvOdlEOPvdSv102EQwsjrUgZu95xzc7tJK5420TPeCC/oGtdaPIoNNw8099IWz35O9yUxGFdVPzAe7dyuwWOp4YGWOJN5AGvbwAGZyldCQue+kLZ78ne5HpC2e/J3uS36tP3wnf15T/du8PVWaxj/wA2XM6A94GXYpxVTkw5xlq81cW5k11odaq1pbFN3XhvABM7KeKlFzwIl7/NCgW2qluczY4Af8cvEeKmYZ2P9RwdTqUNbrLS1sl2EOLj/A38FyhEua7Vp9fou4/ec2k+ncCow9lwfNTE9pZGMT3Bo+tAMypBpqKjaufySvtM4B26D3QNe5dAaKUA0VeJo8kGg5nPo4K7ZeOOLdULRzAQAdSbz9LdK2QhCVWukbQMgoa8r3ZC4NIxE9lB81NzDJUjlREROXb6U/0tCcwdNtR+67pWJtrFVcNQ5SnnIHUDP5Ky2G3MlFWHTUbutOlQbDbHRPD29o86q8WecPaHt0Ir+HWp4nDmkbZFU7L2l8Wwh1njPpHEduY06ilkIQllqqJtV2yue5zbQ5oOYaK5Dck/Rk/7Ue78VNIVwxFQCLdw9EmcBRJJ51/43/3KF9GT/tR7vxR6Mn/aj3fippC78RU6O5voufq+h/F/O/8AuUFBcsrK4bRhqc8qVO80OZS35BaP2p3d/wDpS6EHEPPDuHouN2fQaIG9/O/+5R90WAwtLcWIHMUFAN+STvwAYJS6mAnZX1qZeGfWpRMr3hxQvb1H7pr8FFj5qhztTftsVKtRDMIadMfKJAkm45w1nMDVV3lleL2WOb8qHNwyN5pzmGrqSdGjQK6gnYdq49+Q3T+0Wj7h/wDgrx9sV6Vsdkjr67nSdkIwZ9snguU2eB0j2xsFXvc1jRvc8hrR3kJuk4NBloF/eqWqYU1t1wrVIIBHOGt9Ghdi5K3SyK7ZzAHus1ojkc+V+ESc2GOY4tGEGgAcRVp1rnVc7/Ibp/aLR9w//Bd4tdgbDYHwM9WOzPjHU2ItHkvMYUaNUOJO6F2rgXQBy1S38Q/t85XduQFkaLBhs0Yms73vdiloCXAhrsiG6FmWSdx8nJ2OcYMUIeKOEb2nLcC6pCdfZdBguuzje17/AL8rnDwIVpwncq/iS0kADxv2TCtOzt4NmrUMZGWyO3dnxUPybibGx0IGbDVw/edqag56KYLlFxMwWtw/WNBp/CM/ipTCdyqrfPvcYPfn4q7BFwpbn3SW9xt/TB7UYkYkIVSakpsyxMEhkA6Z1NTt4abE6Ve5UWqRpY1pwtNSTWlc9/BQMN4ytNWvcPEd4yTtPCPqsD59hYeI2xRwtY0gw2uSIFyAZjXPMqUvm7HRP52LIcPZ7vNNrXfJkiDHeuMid448KgKXum/g8hklA46HfwO4pW8RFC5spYK9LZwGzQaq0VXNcG1Wy4ZHjEpN2Gp1Kb62FqhtN1ngiwnMxoeA64MQE1uizNszDLN0XOFOI7t/gm9s5TTOd+iIY0bMjXtI8lE221PmfV1STkANm6gU7c/JomjphhHube/YPFTeynT/AGle54fQBL0a+JxEYbZ4LWDWYP4nOGXUL9dgLHd85fGx7hQkZ/NO0k0j1RTLYKZJVYpMmy9yxpa0AmTx4rR+hVZ5VWerGye4f5tqtKYWmEOa5jtCD/VXYepuPDkltHDDEUXU+I8cx4wudUzVk5K2vMxHTVvWKkjuz7FA2mzljnMORafopa7J8ErXnYan5ea3K7BUpkDs814DAVjhsUxxtBh3VkZ95hS98328PLIjQNObqAk01pXQJ3yevN0oc15q4aHSudDWnZ3qrSuqSd9T3qY5J/2jur4BUVsOxlA2uNVo4HaWIrY9u847riRE2AvEDLtzz4lWtJzSBrS46CvX1BKBRdtmJOHYdONKVB45LMY3eML1derybCddOvTx8YGqkmuqKrZNLHLXEB7J12V2gdSdqJEGFYxwcJCEIQuKSFgtqKHQ5d6yhCAuAfaiJGzwtcegyJwaP3ucc5/gWLH2SXXz14scR0YGumO7EOiwdeJwd/pT77TJxaGGZg/s7VJCf4Q6SIntMbD2q0/YjdeCyy2gjOZ+Fp/9cVR/O5/cE/XMNnjHjmsvZv8At8n9wubf+E28IV/vQVglG+N/8hXlVui9WW0VjeP3HfyleUq9GvD4KnD69n1T9TRenORkWC77K3aLPDXrLGk+JUykLFFgjYz3WNb90AfBLpZWqJvcYZYJPdJaeo/hVSkjqCqjuUMeKB52tof+Qr4VS87ucja7TEAajUbVebsaesfX6pFp5OvVAzIa8eLT/wCR3razWnESDTbonSh4XEYsWVKE7tAMu5ObZbCyAyUGIZU2VJoVx1PnQ3WynTxIFMuecgSeoZpzabO2RuF4qPEHeDsKrdu5OPbnGcY3aH5pS6bTK8ue+U0bspkduilW3gGBvOZBxpXcfryVzeVoO3Wmej30LPqDCY+mKlVpbwdYGJjMEiJy3reap89kez1mlveFMXcTasLJdIwauprUjfuwlWgOrpooW+Lx5lzsIGMsAGX8Va9yt+JdWG6G87Qzlp7ulxsulgpqPqTT+00jMZgSDe4EWHDIlbzTQWUUa0Yt2ZP3ioO8b6mk1dhb7o07So50hJJJJJzyzPasJqlhWtMm54m/csbF7Vq1RydPmU/utt3xn5dCd3SSJWFuuIU7cqLo6rHJu5sJEsgz9lp1bXUqzrMx9ZtSoIvFp98F6r9HsHUw+GJqCN4yBwEeE+UIVVt/KUNeRGzEB7Vd3UrUuf31dZgeaDoOJLfkVzBMpveQ/sHHipber4mjRa+hYTzjYkcM9OJ6uK3vW2MmAeBhePZ1DtxrvH1oopYqsraZTDBujJeFxFd1d/KPiTmRaenr6oHRmhTfJmRrDI95Aa0DXjuptyUIFtiNKbNacVyqzfaW8VLCYj4esKoExMdcEDzlXGC92S4msFKbd/UkrQCXNplrU7hTXxKY3bCWxBx1JJ/hNfHj1p9Z3ElxIpSg3io1NdtarLcxrCd3LvXrqVapWptFX5jBsIt83Zl19yeWJoGQ0TxNLIOl2fJOyEs/5lrUhDLIQhCgrEJG1TiNj5HaMa556mgk+SWUFy3DzYLQ2MVfJGYmitM5aMJruAcSeAK6BJhcc4NBcbALiXJ8umsNtiNXyZ2gAalxaHZDeXQ+K7xyduwWaywwD/Dja0kbX0q93a4k9q5ryBssdntbLJERLM5pktEmuCNorhG0VcWgN1GKpOgPXE1i3XDeCzdmw7lKrZDXukSI0AJ6jpl1JOcVa4cD5LyvdMHOSQsPtvjZ95zR8V6rIXmXkLZ8dusbf/dE7sY4PP8AKoUTAcfeq0H6L02UIQl1NJTx4mlu8fBRV0S1swqdDTx08aJe8Le7FzMWch1/cG8/WScWayYWYXHETqSAAcqafRKvHMp87Ugjj19qQJFXEfs/stc0n7MmIGdyIkxNjEzZMLUaFuVcWR35ZjyTg2XnInxk5nbsrs+A6k3tFWjPYRQ7t447R25pRtsEYMjhVuVBtAJ17VMhxA3c9OtUA0993K5EXB0aRB9Z4nPOGkVmLGNbTpHI8cy7XqHmkL9bSOpNXEjPZTdTYE+5zpUdq3ZvLiKU3nJIXjd0soBbnSvQ0/5FXMfFQOeY199CTr0v9O9lJpJgAAaRY9uc9MwNUjycvItIiceifVJ2bfHzSt53RLNK94phrQdID1RQqEnsEsfrNIp108M1YrRe7YYw0HFJqet1XGtOsqdVpbUD6MEn3PqlcHUbUwzsPjZa1kEaHWGwbnUiPoEzZyYdq+RrGjU0rT4J1ZnWOA+sXPGpo6g+Cr1stj5DV7j1fLYE2qruQqVBFR/YLf5SY2hh6Dt7C0RIyc8lx7BMDrE9avtmv2B5wiTM6VClly+GIucGtFScgAukwMo0A5kAA8dKlZuMwzKJG6c+K9PsXadbGh/KtFouJgzNrk3193XSFoga9pa8AtOw/WRS6EllcLcIDhBEhUu8+Tb2msfSG72h9cFByRkGjga7iK+aunKmWRsQLDQVo48KZdQqqW6Yn1iT21W9g6lSozecR9V8+23hsPh6+5SBBgGLbt+Gv04LSizVCwU4sQ3VwsQ/Rt6gkmyhjKjUmoA46dn0FrZJv0AI3U7a4fklrNZqU37BrTt2/VKBY5sTPFe5a4vazk/uzPCYvpe1r552uHV1xEBz3es4jsArl4/1T5asFBRbJVxkytWlTDGBo93lCZ228Yoqc4/DirTImtNdBxTxVDlUeekiYKNdm2jzSpcRSm/Qq3D0hUqbrsr+SWx2JOHpbzYLpAAM3JPRHcpl3KKzAf21eAa6vkqryjv0vZja18nSwiKMtBDaElxc8tGwDWueiV/NW0e6PvNUTesXMYcbgcTsADC1/S3HDoeBWlQoYcO/Zuk9h+mqwsZVx9Zm7WpQ3UAOE9d5tppxBstuSDYYzJKxv5FI44TjAe97TRxNWucKYuNSQrN6T/zzf9t3/VRv5q2n3R95qPzVtHuj7zV0jCkzvj+n0XGjHgRyTv5qv96khef+fb/tO/6qh8nIIWWiNwsT7MWkkTO5twZRrqdFsjia6abVavzVtHuj7zVFQQYpZIcQa+I0djo1ta0yccvmpsZhyDuuB42b6KDxjZE03D/tUv3v8lZ/Sf8Anm/7bv8Aqm898uBDW2rEDq4MLad7fJNW8l5yKgMI3h7UfmraPdH3mqG7hRm4dzfRde3aDhApvHU6p9Xny6lOXdedkibQTAuPrOLXZlOvzhs364fdd8lWfzVn91v3mptbbjmjze3LfXfxCr+Gwr3XqST0j0V5x2Ow9L/ZDWj+F0D+rzV1mdWkjekxwrlxFRSuwj62KKthxROY3ZQnXIA9EZ8MlL3TMJII3DMFjRltwgNJFNlQm9pbhfQ6OyJ8vNJU3broOYPkfRaWKp8pT3gea4f+hpwkxxgSsNIxudl6rRXdvz7QmN236edLXn9GTkfdzyPGu1Yma5kcmKnRa0UHHf1VVeTdHDtqB030WLj9o1qD6ZZzTJcQdbxB6Mx46BX28HHm3Nb6zxgbn72Ve6p7FUH3LOP8Nx6qH5p7ZL9DWMDgXObWg01ADa9XSTa131M/28LdwpT8e1cw9KtSloAjiZ+iltLF4LFNa95dIFmti03MyM5tbgLJE3XMDRzKfxOA/mIT6yXMz/FmY391ufiMh4qErvWapxzHuHzR1D1JWLTr0GO3jT3vxOt4Nb6dCvt3ss8eUbm9ZdUntPwUouXBWzkbjwPrXBlgr21+CzMVg9xpqb09a9XsjbfL1RhhSDRBjdyECbiMtJnOFZkIQs1emTe1FuE482nIgitaqoWu6WYv0bsLdxGY6jXMK7ps+xxnVg7MvJMUK5pcVnY/Z7MWAHAW4yD3i8dHb1U4XS3acS3bdcY9mv1wVoddcfEdR+aTddDdjj4fJNfGzqVnDYlNuVNvn5qFgYGNwt03a+aWEzhoVIm59z/D8Vg3Qff8PxUTWpnMq9uDqss1sdRHqmP5Q/3j3rHPO97xKeG6X+8PH5IN0P3t7yjlKfELvIV+B99qY8673j3lQl6XIZpMfOUDsOIUqejphNcslZjdUnDv/BY9FybvFTZXawy1wVVTCVKjd1zSQmbzWoOYOoTdtjYNGjf2qU9Gybh3hY9Gye74hc5RnEKXI1funuKaVRVO/R0nu+I+ax6Ok93xHzXeUZxHeuchU+6e5NapGSzMcSS0EnXj1qR9HSe74j5o9Gye74hHKM4hHIVPunuKZRNwijcgNgW/OHee9O/Rsm4d4WfRcn0VzlGcQu8hV+6U0513veJTK9rM6aMN5wtIcHgmpFRXUbs1Mi6pOHefktvRD97e8/JDazAZBCHYaq5paWmD74qFuazugjwB5OZcaZCp2AbAnskznChNQnwud3veayLnPvju/FcdWpk7xN1JuFrBu6AYyidO9MmWgg12rSQtd68bXccwe8EKT9EDa/w/FKC6WbS7w+Shy1MXH1U/hKzhukCOmD6qAFihoQYtTWuIimmQrXdtSclzwnSQs62YvGvwVnbdsY2E9ZPwS0dnY3RoHGmfej4wj5Se/wBZVZ2NSeIexnYI8W7p8VWRyR3TZfw/ilYuSLdspPDDT4q0IVZxtc/a8B6K1uwsADPJ97neqirLcMDMw0k73En8PBSTWgCgFANgW6Eu97n3cZ61o0cPSot3aTQ0dAhCEIUVchCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQhCEIQv//Z" alt="" />
                                            <span class="font-semibold">Control de embarazo</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR89HwzJKPQcD1FlLjfbFNIShgWt2zN5Fi5nQ&usqp=CAU" alt="" />
                                            <span class="font-semibold">Ecografia</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAAilBMVEX////u7u4AAADv7+/+/v7t7e339/f6+vrz8/Pq6uoPDw9eXl4EBARmZmb4+PhiYmLc3NzOzs4+Pj5MTExaWlo5OTmlpaVSUlLj4+OsrKwxMTGfn5+ampopKSnNzc0XFxe8vLxzc3NDQ0MdHR0iIiK1tbUsLCyIiIjCwsKUlJSBgYGFhYV4eHh0dHSkNTttAAAZuElEQVR4nO1dC3uivBImhEtAVPAKioC3itbv//+9MzMBhECr3W23eB6zu922xCEvM0nmGjSt0QxNE4xxVmumpfawlR6MdRIxTQ5/HA5fhSNEcpm+pZ7nbqaX3LE1Gy8L+FfS4C0iXB2Jrfaw1JEI7U77RoAmx8FzAMe5n10meq2tLllIlxk+hCcFyLkDvYBPIjxu3RKaV/yfDqMQsZsVpecDaDICIILL2413XvXdZptzFOOS1NMBhE4OF6bIZxUur/wif9wduZB8fkqAHPljsqgx+Zpts8CF5mkBoviZi7QpmJWk4h/dPcul6CkBwicFy97afKu3w4L2EhMWI9Ei0nOAnHGRfCKfsu1ynIO02jwdQGDL+B4+XR/40BH3k6cDaHIruocO5+Ya2Yf8fjaA3AyXHctLq819QUieD6AVu3fRIf6ToM3+1wCyLoBKa1GBIXN/9ggDPX3vgL5mdoxNeYp/CNBoNPiUwElfawCw0UMzbNKk601TiaAKk80fAQjtKNdc9TYaV0diq10s3hwJADSU1sFB876Imp+JqCGliz0gobJdUOVR9kEioo6kzUHT/KKIwseEqTRL7QIAldaiAk/J3z6IT5+GiJCrNNojsdUuljqSDoCi0bgQI5XJltrFstUuLSLQxZ8+CnAVGEDRbhG5d5uOkShEoGlNWQOpsIn59cdkNnowfEyKaDd7QBe4nqweBXg4Ij1DIWIyQ1OmkGh0ESRczR5NIjR7mj+aBFCVA6VLWw6aZEG5hNvm+0cBpgsNsShEEKAqbepIWrOnA2BzOQQG2UZzaQWAjR6gYuJC2WjNHgjQ0LJH1xjdXWttIjAS9TYAUOliKWOFBZ4rTRVRdl9E2R0RxWcLQ/sCwLjj4cN9DPU+Qu3xdRH9DoCcAGpZ+gURfUaA+eZRgPsjydmzAQzmjwLc5EjwyQAaWjh4FODEfy6AoDjjAijeHwU4sJ8MICOA2sJ9UNk+ker5RADl2LRgdw+gJ/8mWsdG/wQArf/ucxCdhzuE94wAteNdZc3z4AlEmk1G2LMBNDR7e38OevrUJnXr+eYgboXpvUno6ftcLjE/BrBpMLIuq1Lt0WFNNHpAl+K25/tT8IQWgUFj+4BIDaA6kg5romWLW9/RRp2/FbYz/midKX878D+g2E3y663FDLIq77gs6OlVjxpsU+UxojvFNB1uiuAT1yj+fpdz5hQS16RREEGtoRpQl3A1x/rtflHOBXM6yJJliZZhPtU7IcpfzXMMk3YBxHXHlEYf+hTlSH7B8csdx2TAQdVVRwEjGJljJbOPp+AkEdDL6fQ9orIn+XMbyW94tmlobREF25tRfgUT4aVjO0QGpkNfoI9SelrMtoiC8FIU9VcBSr9riwhGNdHBAB2Fs5ipEAHffrnGLARROZFbYzPQccY5/1WAwAD/uI4XaovrbX3tCINutuXVsluLyHp99Bm/RSh+R0Tz4ZvrNVYRzytXFY9+0L205p4pu7qp53llKLv4ohJx34Y5Snpxu98AKPzlx2uIOukqCA8ZUbItfVymf5GD68fH+mdt4bByGv4CQO6gPp3OJ2qbq63V45Eu6JfbhtIH+ksATXS8TANfbUGQBI2GvwxDP/TxL7VE6dEiEqIapM8cYf6eiHIHt/FBm6waAuGoOIs8Oh6Pudw1bdgYmsGWFhE+BvGYmb+5inIHOThoaVka4woRG33dG9dzvcPJRCIjJfjX0kUNBAgcNM2/A6ioRxjhZfcivKiiyCYBsmYP+IsJTKCmyB3cERjxMOxMLhsrsgBtXP1BkzWpF6Z0tSO8AxJRVg7ofoSX343wamR0NR5KtzVRn4Nj9eHbhoUqtMOFtCq46Yzg9yM/z5Kr7h7J3EclGvR0wUlfMYXTFgMJsAridlsTXxVRA9VD82OARiOELeegmmVhGMLx8+MxCMFkckBZYxzHZh2Hg8Fc32QkXaRohn4WZdAN8LUtNzGAOThw2CeLjGk2x9oB0FabpS4Q1ic9SIrGSo+RbTtnDH+640XgWBisRSKGvyMRHfsGdhKW8LML+vf3wxxJtUcypgl+u9vo7lhFi4jisoAn8oDL4ibYNo5hqLgs4JnG5T69O/u2lAvTDM+z2VxPMbUJn7WZjcsA1MxHt2GDCMxQY4iPozYe1WXBHnFZNGX4gRC2WQ9hlwCVmVAPvCzXApcuEFThx+9Lfb8QtAQl1wNdJz10batuQ2haCbC8m+J0eiyE3QzwmncjvGY9wlsCVCKvIjvUEnvdi41TDibcefK21zeRhetOVpn6+OWdKxFeZKE2lgDL2ykRXvNfRHgbHATemphjz8QtNkgQFihdIrzSD+4ZHhGTORiFMaHrZ9iLaMzm7Tam1hJRdaw/7xdtAATbnDtopYZlWKLg0NQEIiIrp2UC/dZNm2IhRhpsGmgk9xggLtMmbA/n2cHV6wDejkGeBXHB0U2UZMfhjcPYbz9bJ4kvk3/7DJDxcHggYMsKIqZmI+DVvPhNumuUGcCvUuL2YeuDYiCq2/QToC9n38C/VCyE/w6T6Ty9LSn7+XReibCn76IhfQuyeysy6CVAU/AQZp9+OIVa+N9NSgdgCiVZZfsPssCP0hv/ciNcb9BwCFilRPUTIG69mIL3HsIl/xajj4CIsE4lA9e4ii7rVzUDL15DWKN6DRALlWB53GSk6+RlstreQYDhvGTo2AcL41SK74XMj+SgpzHmwVU3MnsIEL2gR12f5Jw23XPhTNuiJuMPC5kETFtAmG106YzLKMDrvKGKUzfv+gnQ5Am6MEyyLMMioTLRNOdYiqRcY7MwvBZbRExKCgcrIxI1fP0ECNpTAMOXAA3tQpCWjh9tD/qhcn66rr7ZHk+pDGGvpRa2g90SFICaz7yXALnIcY8QMtVTZsrsttM9dMoWO8nD6eIInzrMaaf09DN1tZb6BgDWkqV7CRC0NVDIhj75mEbrakPfX7OQmbg1ePrqyLkTDSo957AghXmmHyIKVHwGUB3JNwFUe7QBlmNitMjAcm/YmsA1ZuOmg0uccDRJhEywXGWAAzbM7DwHaxG5usYJu4VFhkqYytuY7Hs42GpCjZp+EuEtXBZV+AzuBgBPNhhhzgLkchusF6GNnhkYJiv0zyu5cAxhJZdgFGw9fR/R/olZlY3hFk4nXo3k30d4ueKTgYsLsH2AfQ7u5FsHXREY4GQj4Gghk26MU9QGtdOCbQWT82e+EBfdJU4aN1IlwGokv+b4ZbWrMS38QkQUOMH4LZWbG6ScyomXgiYHDx+lEAwknzYI1HPi/gOE9fCku2jfOrCCxg5pllhI6EeDahOE/wag60hnKMyjK/CciZg433eAxWIBY0NV7MSEYOj49GMZ470FATfjyBc2p8tbBMiB4xdRqyPoLcAB7GeYZQEDdgdRkiTZeUYm1Bs5mQDgfEguxdXsnMPlxQC2/SOzMpyytVWmnwANbTTV3zJYMXnhgSkXlsk712S95D7SwvdVPSXfvYQCFYRx+AQAQaec55iEIJLdDd347Gu0g6B0AoM1Px7Pq6z8XSA483FR6vscxEztN30SAAeFswaJHAwHw+37Og9RfQiH0sAFScSO+fp9OxyMZy6VYgsfgWq3SdhLgHAxOOg7YIQswL5QIBMdbeZIG11KC/6Mw4Dt38FYaHBF84OLEJS4pHmfXgLMU5Q02CZi1ElNLBHjmAxlONfquIf9BXhoY2oBXvZ3erqGOQv2Rt77VdTATPSZgwCHWNnpwE6OQTTh3DwyCHEaAJMpMAS6zBpY7Qi2KuJqvQZIGaJjgavoEFSvUGD8zwR7UJq+3m0jXB4xZkZKAHzkArbGlCIU9fv8BECtVcP2aZFyFeEtLxowo7Y2bvQgoptzluRJtviPPKLT4aHY5IcEd3Jd5LARZqc9qNmgly6xHruhbj8EsNnuhbDxU48VKbNaCHtcJQpSUHZrG7DIYA22nq5WK7kb7E4+l36m/Zn7J3kExOGNLntgQHIL+o+d+q0kwMGnIWz2w0XKhYjy6loAIx+OcA7yvNoH9c3gHACVnAQU9QARxMtDdXmSgN6NHHwLbhwsRXTgVCbevytSriw01gSoaWtXMhRm1xHs+fl8tZtt17nvwA5uyapljwTRhn1wO9utJgednDFMIFMXNwgYBy9i9J/Ygw8UKavxtHZpsKV2sWrXyKI3ys+GaNMufUtYWgjQByHmWljooBGmERcrzH6BiQeWYVs4G0IpmppABXXpMFGQwnA0WfS1uwl1rJY6Vlsdays++MUi5Wb4zIxxws0z2PZQ8VxSJjAxQ7MKTy+CdM+OALmgGW9o5lxPI3jQdDHmlQ/ZueeT+bEi5bqgS4BGAT2ntQPMV9OwQW85SvsOhyCScYGOmLhNHEtWg8A/2AfPIy2Q15NyTvFbCLtaKdQi5a4YfQtgg59I11ZLg9tFylp3CLtgEnqoDRAv3LflXZ3ktMIYoDSb0Dacn5KqyHoB+4OlFeHR/6zqNmYNoLzb3SJl7WdD2M5ad2eX6S7j3MAZN4uCMAx9WE1wIzysMQPf05f5GYHOr7D2hE4YRDvyAQRvy8s41WNR3ad/flHuR0ffH6/efQDoA6j9dDabLVcU9dxmDi1B+tB0ZHzXXS1ng9luT3YSP71tg/AYOX0GCNPej5cpMATLzPNaKol7zTHDHo/oSiMw/pxseLsI+6CmRa6+X8Y+Jkb1FyAPZTxpngFA23DWS/TEbHbbo6NZFijduAjNfXgOjgD9dDjFvf6wjHGp8GWs7d3qMwe5PIBkcuTo2cb2DgMMiKAAWIEUUR82OUeAumOjGJ+L3SIhhk+r1LNeAjTxCJl0LVDnwLXdnqODgtZAUKqy4oSgce4gD/HjsFluuSbL644USxO3+/QQoEhgnVxhGowMn/kuKDPQFzOdgrgKxeziAPQUXNXDub4KaWDwPe4eQa8BwiS8ePoqKIgAQLgm00DD9Qyn5/6Q7lPcEWOfxs12+l4ChC4wI9+dXososBA07E0uitpGw3TBJkz8YHGdog43yDHzPEJOptNrFPjBewrqZ+FpAna7maisg34C5MFU30cEkHpccYso6l4OcYj6Pq9yE1K6EFuFNhegJ6M8qrKnAME+HGLwiI5bAZNIs4bS3PU205Mvst1hszmkunc5L2U+lH448VLVzLFGwhR93gdRRi9g73EuAULj0XU8G/x3zrHS7FJt7CP/eL4OZ+NLJipSsKKeakfifhvApsHYVRr8WZGymvErYk/fOswhqSNbaeSEoSWJHHcHaC5Koiks2wkdHLxRDBKU1zXG04rbVCHs2nj+qEj5z3K2i05WM2d7ZBlZqg8ZfENdLI5fiqLjkWX5WOBy1dPcHtlFHbPsB3/sq37IbMuu5WUXOdu3AXXlbFufj7Vl/D1apMzqLoua694/kF+UMnYxQRZrfDlYr2jY2EG0iBYD/RBA3xHacyYdk4sOUtMa6vOkFpvQ7oawC5/MPZeFpn7o72ITfE4hhuLUPkDmUICX42zJ9/JsB9j8bcMm/IiOiHExJZd4v4MvqLQssbLFoOxvjvm/WACDDx/AFweR7TNKjDEFhbDJyMYz01eoFBj1+/QPIA58SOfACenP41jxAUwUHM/bs6LxYLDDI5zwScDigzU/oJUyKnzZU/pFv133CPAqY/SMJhYTYb4+n+IsRPeMnV+u16Weov7N8/j0HuchFjjhTOQ+pZ/0HCBePJMFxKm4mIngfYLnAs23uH4UpzzNYKoFV7KO5peEAKIOhJ8zeg4QOYjJBJbG5Kj9WRmqnhzBJozn8w2YUzAby9ObvVlSlLLlwHnD6HmEF5tMJqDlXzi1CmY3gq0hOF4woanuzRj7Ap+GOGLwXus5QByeTzKIvniTn2446OSfnHwUxyOlW5Q5CnRYOhcxBS16vk1QFizF2inzM6iSmKX1sDiuPHc/PM9rqD1942M+kDjJfb5+n/4BxOagTa9h+Jaf67kiAGZ1jhbrxanAV7EwtjDl6UoKwhMsMiLFfQC377B5TjpGzs5JEK9u72aQ30zxnRNiqE/rikx/AVobmG240dNhOU2AujvZFUdx1ZoboCoz05dhZVl8J0AlHooxKvYXRcqavcJYisBztpeNKeg1v/Nuv8gwS2EnAdbvRFXYFOEtRtKM7GlYpMz/aZEy3XSOWXUoBk7z4LjaQRaep9dK6/QAlB5/TlZIjYNlmfnPFCmTOSn/fhDCllZpR5HyDl1pqIuK46bJuQbbiokIWKcOA3nekCA0H3URoyfrjHWaS6x4WUX5926R8ohs1U8NXrRVq0tCKVIejYwpLBs+mKKWxS81bPtVUYvllf+XWI+2EDZYGmOzbu2ihXzf4FUH22Hwqi6Lx4qUVZ/M7bK1w2QCGdp0phUDp4tsWFabzc/x5sbaCx38d0wp4M3YzWVxv0i5K8Lbclk0ZfjvipTxnmDx6m5WBG+T8mi8+VFUq+o8cszoUG4TW3L8YvbCzOcSWtl+oEiZ/12RMr1ECf26EWnNwJoyEf0Ci72QL4DZL5jgTrnCDkMZ5T5jlFCJNbcjvFwZyT8uUsbCFxNDDPqZ4uDQyykOjjubiCra6LKMnocT+fthWKwWW6qPZKznrnvmYN6nrl9H8rEXYVAPBBHT7pxoulpj/iH3ySHsvhfhfg2Lsic5w5eF9RkgHqNGAGd0ZwOky6aj8fTDQnom/ABrtU1BOTOH9Ug6Tw0NDYxVRlUIfQaIE4CyJVZUCyM1I2ncTiKH9Cqqv+JkMMnYJykb1js9BHF7zVRPATJzdKLJFRRnhmJb0GqyueRUByMs7sfSX+Frti0fgyx4PZm1c/B6ClAURZFRsbppsjSQ2mrwvsiSfHFZyojMkBRH9CcWh+XOAmH2PHzG+FEO/lLInlFsAfML8chzXRcXz0m8pPTXYq0dycNL0oixnkaXyt2HiSjVV9f3qy+DL5pWBHr/C8XidsDhLBTJBM++LUal+afzaQUmf804gF2OAA5srYL4GwDpIdeiS+FpmIEtUQmogUvpTE+3SbCrDgU8B9FUHzvV7kzUkuHZv0WXUBOzsQ5haH2Uq/bvAO6iddEW8C/GL1G9YUWrPilmIurYmxl8GUdKi9f1tlgvoh0CtG/D+Q2AVKbrVg0mWYpni7nNVrd2q9Mbm039CHyIpvOpZrX+AkAjV4+V7Gw32+ih7rXmZjVf6W+cs33/nQQlJM+7cU9vHsfySbuI2rt7/qhIWdW++f2UZtGwNRbLVbu9va1WG/WlL3jwyqoDmbt6K/4oRFbLBSwxtwE1rQnRSK4u1qsWHK3VvlKkjPFL7vhJ6/DGJEmC467NkFnQ8aqbaUKtTSQABbY+kn9fpEzem47jeTU8Sy3oeHXWUHS86mbGKU7aQYQ3R/Lv/aJyKpjNsw2LY6h50gFwbHVwcEYaaPsY6gde7vbjAM2uU5o1ItLNwU6AZEm1iZjO7wPk5D/sOsWdiS4ODnnHe1Jm9NZz9fV8/eBggbGDCH98Dg5kSoY6FIOpLujfACg9fGqJF8UHO+eg6NgBZ/JI+46J3ItFBlsXkQ842LnIEMLWYLg6kv8rgMYL4AvgC+D/I0BN04Qy+FaRstF6k3KHJsP/EiDuNVwZyXcVKbMvFCnLHu2XIGOu2uMA6Ty1jjcpqyP590XKnSJqSCJf4aBUtlUiD2z0P12kXEUZO4h0c5B/ANBsy/k3vUlZEXPWEeFVulBUrjkURWdkAol0vWtjEHYAHEsHcSeRRmv6ZMz7I2Ftn8y3vEmZXoL8OMBBB8Afe5My+1qR8gccpPrcLoDjjwB+RORTDv5ckXJz8dUMUyWCj/5hgGMJ8BvepPz9RcpdIopdPuLgR3Ow/fB5798/+AL4AvgC+AL4AvgC+AL4AvgC+LcAmwbjV4uUS4BdRL4MsEHj296k3Epyvl+kPLr/Oif8WJdFP2adPpkPiTTbH71YqtWEwuUOn4zao31aN/+aT4Yz9TW1BZHmfTp8Mor/6OUXfQF8AXwBfAF8AXwBfAF8AXwB7BFAJR76xSLlMgCgEMEQdmd8cNwd4cUosWgR4epI/n2RcjcHJZG/i/Biu2NNaH8S4ZVvzG1GcD8uUq5Mzw4ifxnC1m7l0h9FeI2ySPnzCK/1U23UGT5zuuKDPzYGaMpLkFlnhLfeeKNIuWgqEf7VEDYyrEXkjsuiu4a35bJQZhPJwadOJ/NeCBuf0pd8Mp0R3oJIE2Cjwx8WKfOvFCmXrbnYmX8Q4TXUCG9BpBnh5cpIfr5IuZOD/XIbvgC+AL4AvgC+AL4AvgC+AL4APglAaTZ/DvC+NcH+LMLbRaQJUB3JIwDbMVLDaPo+2iFftYfRRcR4PCFWGgL3R9Lq0RpJm4j6kL5cpCytSrXxj5LSO10WjBKwW0SYep9fKFIu5aCDSF/chi+AL4AvgC+AdNz9EwJsnRDr6Vs7rRVhF98M8ITYJwToD9rMuhiT9rGx26LM/MkAqifE0g8Lbai32lk8pYhysW6depAG+LZB9aCAhN7hIVpEeg6Qcb+1yly5UR4jd5PQATmpnxAgEwsFH77I3YjSJsJDXryw4F8AlAGAZtC0u0i50UOtTsXgLJ1g/18Dy36N5g1/d2vw9DTG12m0DusoIrzNkagADUvtcTeEjQCFqXBQ6WDYvMVBlQhHroCQXiUQ+XraWOChsVpYIfTofVoFrfaBOYwrI1GMNATYivC28HRy8BNzSXJQqeL9gINC+Ovq5P5djqeqYiG1E1VHVy2jsAz6tcWA8S9HeDvOqFIQakZLREctgFwNUn1AxJEvzdx77mZ8lL4QOubPcOLlAX45i3zBnYKGusgYBmf3RVTJhmiL6P8A0fZtCSnKZLAAAAAASUVORK5CYII=" alt="" />
                                            <span class="font-semibold">Rayos x</span>
                                        </li>
                                        <li class="m-3.5 h-52 w-40 bg-gray-100 rounded-xl flex flex-col items-center justify-center text-center duration-300 hover:bg-white hover:shadow-2xl">
                                            <img class="max-h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbaOFuoQ73dQBmJvHL7uChRXuhxVBtBTF-7A&usqp=CAU" alt="" />
                                            <span class="font-semibold">Analisis Genetico</span>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <section class="container mx-auto pt-12">
                                <!-- title -->
                                <div class="relative flex items-end font-bold">
                                    <h2 class="text-2xl">VENTA DE PRODUCTOS</h2>
                                    <a href class="ml-10 flex items-center text-gray-400">
                                        <span class="text-sm">productos</span>
                                        <svg class="ml-3 h-3.5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-9x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                    </a>
                                    <div class="ml-auto flex">
                                        <a href class="h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"></path></svg>
                                        </a>
                                        <a href class="ml-1.5 h-6 w-6 flex items-center justify-center rounded-md bg-gray-100">
                                            <svg class="h-3 text-gray-700" aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <!-- cards -->
                                <div class="mt-10">
                                    <ul class="-m-3.5 flex">
                                        <li class="product m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product2 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product4 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                        <li class="product3 m-3.5 h-48 w-1/4 bg-cover rounded-xl"></li>
                                    </ul>
                                </div>
                            </section>
                            <!-- footer -->
                            <footer class="mt-16 h-48">
                                <hr>
                                <div class="container mx-auto py-5">
                                    <a href>&copy; 2021 <span class="font-bold">Farmat</span> All Rights Reserved</a>
                                </div>
                            </footer>



                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
