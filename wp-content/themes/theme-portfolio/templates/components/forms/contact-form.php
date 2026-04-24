<main id="contenu" class="contact-main">
    <div class="page__form form">
        <p class="form__title">
            Contact
        </p>
        <div class="contact__background g">
            <section class="form__container">
                <?php
                $feedback = hepl_session_get('hepl_contact_form_feedback') ?? false;
                $errors = hepl_session_get('hepl_contact_form_errors') ?? [];
                ?>
                <h2 class="contact__form__title">
                    Mon formulaire de contact
                </h2>
                <?php if ($feedback): ?>
                    <div>
                        <p>Merci ! Votre message a bien été envoyé.</p>
                    </div>
                <?php endif; ?>
                <?php if ($errors): ?>
                    <div>
                        <p>Attention ! Merci de corriger les erreurs du formulaire.</p>
                    </div>
                <?php endif; ?>

                <!-- L'action redirige vers le fichier de base de Wordpress qui dit qui fait quoi. -->
                <form class="form__form" action="<?= admin_url('admin-post.php'); ?>" method="POST">
                    <div class="contact__input-container">
                        <div class="contact__input-wrapper">
                            <label class="form__label" for="name">Nom complet *</label>
                            <input class="form__input" type="text" id="name" name="name" value="" placeholder="John Doe"
                                   required/>
                            <?php if ($errors['name'] ?? null): ?>
                                <p class="form__error-message"><?= $errors['name']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="contact__input-wrapper">
                            <label class="form__label" for="email">Adresse mail *</label>
                            <input class="form__input" type="email" id="email" name="email" value=""
                                   placeholder="Ex: johndoe@example.com" required/>
                            <?php if ($errors['email'] ?? null): ?>
                                <p class="form__error-message"><?= $errors['email']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="contact__input-wrapper">
                            <label class="form__label" for="object">Sujet</label>
                            <input class="form__input" type="text" id="object" name="object" value=""
                                   placeholder="Votre Sujet"/>
                            <?php if ($errors['object'] ?? null): ?>
                                <p class="form__error-message"><?= $errors['object']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="contact__input-wrapper">
                            <label class="form__label" for="message">Message</label>
                            <textarea id="message" class="form__textarea" name="message" rows="10" cols="40" maxlength="2000"
                                      placeholder="Ecrivez votre message ici"></textarea>
                            <?php if ($errors['message'] ?? null): ?>
                                <p class="form__error-message"><?= $errors['message']; ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- Bouton qui va soumettre le formulaire -->
                        <button class="form__button" type="submit">Envoyer</button>
                    </div>

                    <!-- Je lui dis quelle fonction il doit lancer -->
                    <input type="hidden" name="action" value="hepl_contact_form"/>
                    <!-- On s'assure que notre requête vient bien de notre site -->
                    <input type="hidden" name="contact_nonce" value="<?= wp_create_nonce('hepl_contact_form'); ?>"/>
                </form>
            </section>
        </div>
</main>