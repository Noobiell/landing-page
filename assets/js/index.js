class ImpostoRenda {

    constructor() {
        this.formContato = document.querySelector("#contato");
        this._avisoFormulario = document.querySelector("#avisoFormulario");
        this.infoCliente = {};
        this.slideDocumentacao();
        this.mascara();
        this.submitForm();
        this.scrollEvent();
        this.slider();
    }

    disparaAlert(titulo, mensagem, icone) {

        Swal.fire({
            title: titulo,
            text: mensagem,
            icon: icone,
            button: "Fechar",
        }).then(result => {

            if (result) {

                this.formContato.reset();

            }

        });

    }

    mascara() {

        $("#celular").mask('(00)00000-0000');

    }

    slideDocumentacao() {

        $(document).ready(function () {

            $('.containerDocumentos').slick({
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                            dots: true
                        }
                    }

                ]
            });

        });

    }

    submitForm() {

        this.formContato.addEventListener('submit', e => {

            e.preventDefault();

            if (this.recuperaForm()) {

                this.salvaCliente();

            }

        });

    }

    recuperaForm() {

        let isValid = true;

        [...this.formContato.elements].forEach(element => {

            element.classList.remove('is-invalid');

            if (element.value == '' && element.type != 'submit') {

                isValid = false;
                element.classList.add('is-invalid');
                this.avisoFormulario = 'Preencha todas as informações';

            } else if (element.name == 'celular') {

                let celLimpo = element.value.replace('(', '').replace(')', '').replace('-', '');

                if (celLimpo.length == 11) {

                    this.infoCliente[element.name] = celLimpo;

                } else {

                    isValid = false;
                    element.classList.add('is-invalid');
                    this.avisoFormulario = 'informe um número de celular com 11 dígitos';

                }

            } else {

                this.infoCliente[element.name] = element.value;

            }

        });

        return isValid;

    }

    salvaCliente() {

        $.ajax({

            url: 'server/php/cliente/salva_cliente.php',
            method: 'POST',
            data: this.infoCliente,
            success: data => {

                data = JSON.parse(data);

                if (!data.erro) {

                    if (data.mensagem == 'Cliente cadastrado com sucesso') {

                        this.disparaAlert('Sucesso', data.mensagem, 'success');

                    } else if (data.mensagem == 'Cliente ja cadastrado em nosso sistema') {

                        this.disparaAlert('Cliente ja cadastrado', 'Você ja se cadastrou em nosso sistema, aguarde um de nossos atendentes entrar em contato', 'info');

                    } else if (data.mensagem == 'Número de celular inválido') {

                        this.disparaAlert('Número inválido', 'Você tentou enviar um número de celular inválido', 'warning');

                    }

                } else {

                    this.disparaAlert('Opss!', data.mensagem, 'warning')

                }

            },
            beforeSend: () => {



            },
            error: e => {

                console.log(e);

            }

        });

    }

    slider() {

        $('#documentacao').slick({
            infinite: true,
            slidesToShow: 3,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            speed: 1000,
            slidesToScroll: 3,
            responsive: [

                {
                    breakpoint: 680,
                    settings: {

                        slidesToShow: 1,
                        slidesToScroll: 1

                    }

                },
                {
                    breakpoint: 815,
                    settings: {

                        slidesToShow: 2,
                        slidesToScroll: 2

                    }

                }
            ]
        });

    }

    scrollEvent() {

        window.addEventListener("scroll", () => {

            this.animacaoHeader();

        });

    }

    animacaoHeader() {

        const nav = document.querySelector('nav');
        const windowTop = window.pageYOffset;

        if (windowTop >= 40) {

            nav.classList.add('barraNav');

        } else {

            nav.classList.remove('barraNav');

        }

    }

    get avisoFormulario() {

        return this._avisoFormulario.innerHTML;

    }

    set avisoFormulario(value) {

        return this._avisoFormulario.innerHTML = value;

    }

}