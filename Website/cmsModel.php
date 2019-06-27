<form class="model--container" method="POST">
    <h2 class="model__header">tekst aanpassen:</h2>
    <input id="tab1" type="radio" value="1" name="radio">
    <label for="tab1" class="model__tab__button--1">Er is geen tab</label>
    <input id="tab2" type="radio" value="2" name="radio">
    <label for="tab2" class="model__tab__button--2">Er is geen tab</label>
    <section class="model__tab--1">
        <p class="model_p">Titel:</p>
        <input type="text" class="model__input--title">
        <p class="model_p">Tekst:</p>
        <textarea name="content" id="editor" class="model__textarea model__textarea--1"></textarea>
        <input type="submit" class="model__submit" value="opslaan">
    </section>
    <section class="model__tab--2">
        <p class="model_p">Titel:</p>
        <input type="text" class="model__input--title">
        <p class="model_p">Tekst:</p>
        <textarea name="content2" class="model__textarea model__textarea--2"></textarea>
        <input type="submit" class="model__submit" value="opslaan">
    </section>
    
</form>
<script>
        ClassicEditor
            .create( document.querySelector( '.model__textarea--1' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '.model__textarea--2' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>
