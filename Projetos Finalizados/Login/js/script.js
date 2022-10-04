// variaveis do input de senha
const openEyeIcons = document.querySelectorAll(".fa-eye");
const slashEyeIcons = document.querySelectorAll(".fa-eye-slash");
const passwordInput = document.querySelectorAll(".password-input");

openEyeIcons.forEach((icone, index) => {
    icone.addEventListener("click", () => {
        // esconder icone de olho
        icone.style.display = "none";

        // mostrar icone de olho slash
        slashEyeIcons[index].style.display = "inline-block";

        // mudar input de password para text
        passwordInput[index].setAttribute("type", "text");
    });
});

slashEyeIcons.forEach((icone, index) => {
    icone.addEventListener("click", () => {
        // esconder icone de olho slash
        icone.style.display = "none";

        // mostrar icone de olho
        openEyeIcons[index].style.display = "inline-block";

        // mudar input de text para password
        passwordInput[index].setAttribute("type", "password");
    });
});

// mostrar form de editar a senha
let passwordFormActive = false;

document.querySelector(".edit-password > h2").addEventListener("click", () => {
    if (passwordFormActive == false) {
        // rotacionar icone
        document.querySelector(".edit-password > h2 > i").style.transform =
            "rotate(90deg) translateX(-2px)";

        // mostrar o form
        let screenSize = window.screen.width;
        const form = document.querySelector(".edit-password > form");

        if (screenSize < 768) {
            form.style.display = "flex";
        } else {
            form.style.display = "block";
        }

        passwordFormActive = true;
    } else {
        // rotacionar icone
        document.querySelector(".edit-password > h2 > i").style.transform =
            "rotate(0) translateX(0)";

        // mostrar o form
        let screenSize = window.screen.width;
        const form = document.querySelector(".edit-password > form");

        form.style.display = "none";

        passwordFormActive = false;
    }
});

// mostrar botão de deletar perfil
let deleteButtonActive = false;

document.querySelector(".delete-profile > h2").addEventListener("click", () => {
    if (deleteButtonActive == false) {
        // rotacionar icone
        document.querySelector(".delete-profile > h2 > i").style.transform =
            "rotate(90deg) translateX(-2px)";

        // mostrar o botão
        document.querySelector(
            ".delete-profile .delete-profile_btn"
        ).style.display = "block";

        deleteButtonActive = true;
    } else {
        // rotacionar icone
        document.querySelector(".delete-profile > h2 > i").style.transform =
            "rotate(0) translateX(0)";

        // mostrar o botão
        document.querySelector(
            ".delete-profile .delete-profile_btn"
        ).style.display = "none";

        deleteButtonActive = false;
    }
});

// mostrar menu de deletar conta
document.querySelector(".delete-profile_btn").addEventListener("click", () => {
    const menuDeleteProfile = document.querySelector(".menu_delete-profile");

    menuDeleteProfile.style.display = "flex";
    menuDeleteProfile.classList.add("show");
});
