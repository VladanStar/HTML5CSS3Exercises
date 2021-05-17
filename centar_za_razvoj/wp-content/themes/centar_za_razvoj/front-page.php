<?php get_header(); ?>

    <!-- header -->
    <header class="homeHeader">
        <h1><?php the_field('naslov_u_headeru'); ?></h1>
    </header>

    <!-- o nama -->
    <section class="onama container">
        <article>
            <h2><?php the_field('o_nama_naslov'); ?></h2>
            <p><?php the_field('o_nama_opis'); ?></p>
            <h3><?php the_field('o_nama_naslov_liste'); ?> </h3>
            <ul>
                <?php the_field('o_nama_lista'); ?>
            </ul>
            <button><?php the_field('o_nama_dugme'); ?></button>
        </article>
    </section>

    <!-- usluge -->
    <section class="usluge">
        <h2>Usluge</h2>
        <div class="container">
            <article>
                <i class="far fa-check-circle"></i>
                <p>Izgradnja plana (ličnog i profesionalnog) razvoja lidera i zaposlenih</p>
            </article>
            <article>
                <i class="far fa-check-circle"></i>
                <p>Razvijanje inovativnog poslovnog modela</p>
            </article>
            <article>
                <i class="far fa-check-circle"></i>
                <p>Podrška u pozicioniranju na tržištu (putem networking-a) sa novim uslugama</p>
            </article>
            <article>
                <i class="far fa-check-circle"></i>
                <p>Jačanje produktivnosti, povećanje posvećenosti i inicijative zaposlenih</p>
            </article>
        </div>
    </section>

    <!-- mentorskeUsluge -->
    <section class="mentorskeUsluge container">
        <h2>Mentorske usluge</h2>
        <p>Mentorstvo je kompleksan, interaktivan proces koji se odvija između osoba različitog nivoa iskustva i stručnosti, u kojem stručnija i iskusnija osoba (mentor) daju podršku manje iskusnoj osobi (menti) kako bi postale efikasnije u radu i doprinele ostvarenju svojih ličnih i profesionalnih ciljeva.
            <br><br>
            Cilj mentorstva je da otvori mogućnost za stalno unapređenje znanja i veština, odnosno ličnog i profesionalnog razvoja, kao i napredovanja u karijeri. Mentorska podrška u centru za razvoj preduzetničkog ekositema podrazumeva pružanje stručnih (specijalizovanih) usluga (strateškog planiranja, prodajno savetodavnih, marketinških, pravno- ekonomskih, pomoć u prikupljanju sredstava i dr.) u znanju, radu i stvaralačkom razmišljanju, čime pružamo podršku nastanku, opstanku i samoodrživom razvoju preduzeća i preduzetnika u fazi kada su ona najugroženija – neposredno pre i nakon osnivanja.</p>
        <button>Kontaktirajte nas</button>
    </section>

    <!-- preporuke -->
    <section class="preporuke">
        <h2>Preporuke</h2>
        <div class="container">
            <article>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/nemanja.jpg" alt="">
                <h4>Nemanja Potkonjak <br> <span>CEO www.smartdesigns-ns.com</span></h4>
                <p>Vrhunac učenja u životu je kada znanje koje ste usvojili i primenili možete preneti na druge. Stručnost i znanje koje poseduje gospodin Aleksandar Pokrajac, je izuzetno veliko i široko. Ko god želi da ostvari svoje poslovne ideje i snove neće pogrešiti ako mu se obrati za savet! Stoga ljudi, napravite iskorak iz zone komfora i uplovite u jedno lepo putovanje preduzetništva, oko sebe imajte stručne i proaktivne ljude koji će Vam pomoći na tom putu! Veliko hvala Aleksandru za sve do sada! </p>
            </article>
            <article>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/marko.jpg" alt="">
                <h4>Marko Vlajić <br> <span>Combat fit program</span></h4>
                <p>Većina ljudi traga za boljim poslom, neki od njih odaberu svoj put da sami uzmu stvar u svoje ruke i postanu preduzetnici. Kao početnik, osoba ima milion pitanja oko toga šta, gde, kako krenuti? Ova ekipa će dati milion odgovora. Sve što budućem preduzetniku treba NA JEDNOM MESTU! Preporuka!</p>
            </article>
        </div>
    </section>

   <?php get_footer(); ?>
    