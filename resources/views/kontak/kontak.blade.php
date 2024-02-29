@extends('layouts.layouts')
@section('content')
<section id="heroo" style="margin-top: 90px;">
    <div class="container col-xxl-6 text-center text-white">
        <div class="title">
            <div class="hero-text">Kontak</div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="align-items-center">
        <div class="text-center py-2">
            <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.927881038822!2d106.6901608!3d-6.3963247!3m2!1i1024!2i768!4f13.1
                !3m3!1m2!1s0x2e69e7bf53f36d41%3A0xb415aedd8993b720!2sPondok%20Pesantr
                en%20Daarul%20Azmi!5e0!3m2!1sid!2sid!4v1707360168810!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="maps"></iframe>
        </div>
        <div class="container pt-5">
            <h5 class="text-center"><a class="A" href="https://maps.app.goo.gl/Aa9ipCmPJ2b6brLd6" target="_blank">
                    Kp. Rawalembang RT 03/11, Desa Cibinong Kecamatan Gunungsindur, Kabupaten Bogor 16340
                </a>
            </h5>
            <h5 class="text-center">
                <a class="A" href="https://api.whatsapp.com/send?phone=6288292044237" class="nav-link p-0 text-muted ms-2">Kontak: +62-8829-2044-237
                </a>
            </h5>
        </div>
    </div>
</section>
<script>
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API",
            c = "google",
            l = "importLibrary",
            q = "__ib__",
            m = document,
            b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}),
            r = new Set,
            e = new URLSearchParams,
            u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => h = n(Error(p + " could not load."));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a)
            }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })({
        key: "YOUR_API_KEY_HERE",
        // Add other bootstrap parameters as needed, using camel case.
        // Use the 'v' parameter to indicate the version to load (alpha, beta, weekly, etc.)
    });
</script>
@endsection