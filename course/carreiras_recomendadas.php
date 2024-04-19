<?php
// Recebe a variável $categoryurl usando extract
extract($GLOBALS, EXTR_SKIP);

global $USER;

?>

<div id="categoria-carreiras-recomendadas" class="tab-pane fade active show">
    <div class="tab-space"></div>
    <div class="tab-body">
        <div class="carreiras-recomendadas-body">
            <div class="carreiras-recomendadas">
                <div class="d-flex">
                    <div class="carreiras-recomendadas-title">
                        Sugestões de carreiras dos nossos especialistas, para você começar <span
                            class="carreiras-recomendadas-title-smiles">😉👏</span>
                    </div>
                </div>
                <div class="carreiras-recomendadas-cards">
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M9.09469 17.7499C8.98469 17.7499 8.86469 17.7199 8.76469 17.6699C7.99469 17.2799 7.33469 16.6999 6.85469 15.9799C6.45469 15.3799 6.45469 14.6099 6.85469 14.0099C7.33469 13.2899 7.99469 12.7099 8.76469 12.3299C9.13469 12.1399 9.58469 12.2999 9.77469 12.6699C9.96469 13.0399 9.81469 13.4899 9.43469 13.6799C8.89469 13.9499 8.43469 14.3599 8.10469 14.8599C8.04469 14.9499 8.04469 15.0699 8.10469 15.1699C8.43469 15.6699 8.89469 16.0799 9.43469 16.3499C9.80469 16.5399 9.95469 16.9899 9.77469 17.3599C9.63469 17.5999 9.36469 17.7499 9.09469 17.7499Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M15.303 17.7499C15.023 17.7499 14.763 17.5999 14.633 17.3399C14.443 16.9699 14.593 16.5199 14.973 16.3299C15.513 16.0599 15.973 15.6499 16.303 15.1499C16.363 15.0599 16.363 14.9399 16.303 14.8399C15.973 14.3399 15.513 13.9299 14.973 13.6599C14.603 13.4699 14.453 13.0199 14.633 12.6499C14.823 12.2799 15.273 12.1299 15.643 12.3099C16.413 12.6999 17.073 13.2799 17.553 13.9999C17.953 14.5999 17.953 15.3699 17.553 15.9699C17.073 16.6899 16.413 17.2699 15.643 17.6499C15.523 17.7199 15.413 17.7499 15.303 17.7499Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M15.0938 22.75H9.09375C3.66375 22.75 1.34375 20.43 1.34375 15V9C1.34375 3.57 3.66375 1.25 9.09375 1.25H15.0938C20.5238 1.25 22.8438 3.57 22.8438 9V15C22.8438 20.43 20.5238 22.75 15.0938 22.75ZM9.09375 2.75C4.48375 2.75 2.84375 4.39 2.84375 9V15C2.84375 19.61 4.48375 21.25 9.09375 21.25H15.0938C19.7038 21.25 21.3438 19.61 21.3438 15V9C21.3438 4.39 19.7038 2.75 15.0938 2.75H9.09375Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M2.32422 8.76C1.91422 8.76 1.57422 8.42 1.57422 8.01C1.57422 7.6 1.90422 7.26 2.32422 7.26L21.5442 7.25C21.9542 7.25 22.2942 7.59 22.2942 8C22.2942 8.41 21.9642 8.75 21.5442 8.75L2.32422 8.76Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Desenvolvimento Full Stack</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">Um programador pronto para atuar em qualquer parte do
                                desenvolvimento web. </div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 8 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(8, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M10.6973 17.7H6.90727C3.10727 17.7 1.94727 16.54 1.94727 12.74V6.74003C1.94727 2.94003 3.10727 1.78003 6.90727 1.78003H17.4373C21.2373 1.78003 22.3973 2.94003 22.3973 6.74003C22.3973 7.15003 22.0573 7.49003 21.6473 7.49003C21.2373 7.49003 20.8973 7.15003 20.8973 6.74003C20.8973 3.80003 20.3773 3.28003 17.4373 3.28003H6.90727C3.96727 3.28003 3.44727 3.80003 3.44727 6.74003V12.74C3.44727 15.68 3.96727 16.2 6.90727 16.2H10.6973C11.1073 16.2 11.4473 16.54 11.4473 16.95C11.4473 17.36 11.1073 17.7 10.6973 17.7Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.6973 22.2199C10.2873 22.2199 9.94727 21.8799 9.94727 21.4699V16.9399C9.94727 16.5299 10.2873 16.1899 10.6973 16.1899C11.1073 16.1899 11.4473 16.5299 11.4473 16.9399V21.4699C11.4473 21.8899 11.1073 22.2199 10.6973 22.2199Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.6973 13.7H2.69727C2.28727 13.7 1.94727 13.36 1.94727 12.95C1.94727 12.54 2.28727 12.2 2.69727 12.2H10.6973C11.1073 12.2 11.4473 12.54 11.4473 12.95C11.4473 13.36 11.1073 13.7 10.6973 13.7Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.6975 22.22H7.4375C7.0275 22.22 6.6875 21.88 6.6875 21.47C6.6875 21.06 7.0275 20.72 7.4375 20.72H10.6975C11.1075 20.72 11.4475 21.06 11.4475 21.47C11.4475 21.88 11.1075 22.22 10.6975 22.22Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M19.7366 22.2201H16.1866C13.4166 22.2201 12.4766 21.2801 12.4766 18.5101V12.8001C12.4766 10.0301 13.4166 9.09009 16.1866 9.09009H19.7366C22.5066 9.09009 23.4466 10.0301 23.4466 12.8001V18.5101C23.4466 21.2901 22.5066 22.2201 19.7366 22.2201ZM16.1866 10.5901C14.2266 10.5901 13.9766 10.8401 13.9766 12.8001V18.5101C13.9766 20.4701 14.2266 20.7201 16.1866 20.7201H19.7366C21.6966 20.7201 21.9466 20.4701 21.9466 18.5101V12.8001C21.9466 10.8401 21.6966 10.5901 19.7366 10.5901H16.1866Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M17.998 18.97C17.738 18.97 17.478 18.87 17.288 18.68C17.198 18.59 17.128 18.48 17.078 18.36C17.028 18.23 16.998 18.1 16.998 17.97C16.998 17.71 17.108 17.45 17.288 17.27C17.518 17.04 17.868 16.93 18.198 16.99C18.258 17.01 18.318 17.03 18.378 17.05C18.438 17.08 18.498 17.11 18.548 17.14C18.608 17.18 18.658 17.22 18.708 17.27C18.888 17.45 18.998 17.71 18.998 17.97C18.998 18.1 18.968 18.23 18.918 18.36C18.868 18.48 18.798 18.59 18.708 18.68C18.658 18.73 18.608 18.77 18.548 18.8C18.498 18.84 18.438 18.87 18.378 18.9C18.318 18.92 18.258 18.94 18.198 18.95C18.128 18.97 18.068 18.97 17.998 18.97Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Desenvolvimento Web</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">Profissional extremamente valorizado que tem como foco
                                aumentar a
                                capacidade e agilidade de uma empresa na automação.</div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 7 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(7, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M15.3027 22.75H9.30273C4.89273 22.75 3.55273 21.41 3.55273 17V7C3.55273 2.59 4.89273 1.25 9.30273 1.25H15.3027C19.7127 1.25 21.0527 2.59 21.0527 7V17C21.0527 21.41 19.7127 22.75 15.3027 22.75ZM9.30273 2.75C5.72273 2.75 5.05273 3.43 5.05273 7V17C5.05273 20.57 5.72273 21.25 9.30273 21.25H15.3027C18.8827 21.25 19.5527 20.57 19.5527 17V7C19.5527 3.43 18.8827 2.75 15.3027 2.75H9.30273Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M14.3027 6.25H10.3027C9.89273 6.25 9.55273 5.91 9.55273 5.5C9.55273 5.09 9.89273 4.75 10.3027 4.75H14.3027C14.7127 4.75 15.0527 5.09 15.0527 5.5C15.0527 5.91 14.7127 6.25 14.3027 6.25Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M12.302 19.86C11.032 19.86 10.002 18.83 10.002 17.56C10.002 16.29 11.032 15.26 12.302 15.26C13.572 15.26 14.602 16.29 14.602 17.56C14.602 18.83 13.572 19.86 12.302 19.86ZM12.302 16.75C11.862 16.75 11.502 17.11 11.502 17.55C11.502 17.99 11.862 18.35 12.302 18.35C12.742 18.35 13.102 17.99 13.102 17.55C13.102 17.11 12.742 16.75 12.302 16.75Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Desenvolvimento Mobile</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">Formação criada para você que quer desenvolver aplicativos
                                mobile.</div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 9 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(9, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100">
                    <div class="carreiras-recomendadas-btn1">
                        <a id="ver-mais-carreiras-link" class="carreiras-recomendadas-a" data-toggle="tab" href="#categoria-todas-as-carreiras">
                            Ver mais carreiras
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                    fill="#0D1C2E" />
                                <path
                                    d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                    fill="#0D1C2E" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carreiras-recomendadas">
                <div class="d-flex">
                    <div class="carreiras-recomendadas-title">
                        Gosta muito de sites e landing pages? Confira esses <span
                            class="carreiras-recomendadas-title-smiles">😎</span>
                    </div>
                </div>
                <div class="carreiras-recomendadas-cards">
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M10.0938 17.7H6.30375C2.50375 17.7 1.34375 16.54 1.34375 12.74V6.74003C1.34375 2.94003 2.50375 1.78003 6.30375 1.78003H16.8337C20.6337 1.78003 21.7938 2.94003 21.7938 6.74003C21.7938 7.15003 21.4538 7.49003 21.0438 7.49003C20.6338 7.49003 20.2938 7.15003 20.2938 6.74003C20.2938 3.80003 19.7738 3.28003 16.8337 3.28003H6.30375C3.36375 3.28003 2.84375 3.80003 2.84375 6.74003V12.74C2.84375 15.68 3.36375 16.2 6.30375 16.2H10.0938C10.5037 16.2 10.8438 16.54 10.8438 16.95C10.8438 17.36 10.5037 17.7 10.0938 17.7Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.0938 22.2199C9.68375 22.2199 9.34375 21.8799 9.34375 21.4699V16.9399C9.34375 16.5299 9.68375 16.1899 10.0938 16.1899C10.5037 16.1899 10.8438 16.5299 10.8438 16.9399V21.4699C10.8438 21.8899 10.5037 22.2199 10.0938 22.2199Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.0938 13.7H2.09375C1.68375 13.7 1.34375 13.36 1.34375 12.95C1.34375 12.54 1.68375 12.2 2.09375 12.2H10.0938C10.5037 12.2 10.8438 12.54 10.8438 12.95C10.8438 13.36 10.5037 13.7 10.0938 13.7Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.094 22.22H6.83398C6.42398 22.22 6.08398 21.88 6.08398 21.47C6.08398 21.06 6.42398 20.72 6.83398 20.72H10.094C10.504 20.72 10.844 21.06 10.844 21.47C10.844 21.88 10.504 22.22 10.094 22.22Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M19.133 22.22H15.583C12.813 22.22 11.873 21.28 11.873 18.51V12.8C11.873 10.03 12.813 9.08997 15.583 9.08997H19.133C21.903 9.08997 22.843 10.03 22.843 12.8V18.51C22.843 21.29 21.903 22.22 19.133 22.22ZM15.583 10.59C13.623 10.59 13.373 10.84 13.373 12.8V18.51C13.373 20.47 13.623 20.72 15.583 20.72H19.133C21.093 20.72 21.343 20.47 21.343 18.51V12.8C21.343 10.84 21.093 10.59 19.133 10.59H15.583Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M17.3945 18.97C17.1345 18.97 16.8745 18.87 16.6845 18.68C16.5945 18.59 16.5245 18.48 16.4745 18.36C16.4245 18.23 16.3945 18.1 16.3945 17.97C16.3945 17.71 16.5045 17.45 16.6845 17.27C16.9145 17.04 17.2645 16.93 17.5945 16.99C17.6545 17.01 17.7145 17.03 17.7745 17.05C17.8345 17.08 17.8945 17.11 17.9445 17.14C18.0045 17.18 18.0545 17.22 18.1045 17.27C18.2845 17.45 18.3945 17.71 18.3945 17.97C18.3945 18.1 18.3645 18.23 18.3145 18.36C18.2645 18.48 18.1945 18.59 18.1045 18.68C18.0545 18.73 18.0045 18.77 17.9445 18.8C17.8945 18.84 17.8345 18.87 17.7745 18.9C17.7145 18.92 17.6545 18.94 17.5945 18.95C17.5245 18.97 17.4645 18.97 17.3945 18.97Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Desenvolvimento Web</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">Profissional extremamente valorizado que tem como foco
                                aumentar a capacidade e agilidade de uma empresa na automação. </div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 7 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(7, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M15.6973 22.75H9.69727C5.28727 22.75 3.94727 21.41 3.94727 17V7C3.94727 2.59 5.28727 1.25 9.69727 1.25H15.6973C20.1073 1.25 21.4473 2.59 21.4473 7V17C21.4473 21.41 20.1073 22.75 15.6973 22.75ZM9.69727 2.75C6.11727 2.75 5.44727 3.43 5.44727 7V17C5.44727 20.57 6.11727 21.25 9.69727 21.25H15.6973C19.2773 21.25 19.9473 20.57 19.9473 17V7C19.9473 3.43 19.2773 2.75 15.6973 2.75H9.69727Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M14.6973 6.25H10.6973C10.2873 6.25 9.94727 5.91 9.94727 5.5C9.94727 5.09 10.2873 4.75 10.6973 4.75H14.6973C15.1073 4.75 15.4473 5.09 15.4473 5.5C15.4473 5.91 15.1073 6.25 14.6973 6.25Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M12.6965 19.86C11.4265 19.86 10.3965 18.83 10.3965 17.56C10.3965 16.29 11.4265 15.26 12.6965 15.26C13.9665 15.26 14.9965 16.29 14.9965 17.56C14.9965 18.83 13.9665 19.86 12.6965 19.86ZM12.6965 16.75C12.2565 16.75 11.8965 17.11 11.8965 17.55C11.8965 17.99 12.2565 18.35 12.6965 18.35C13.1365 18.35 13.4965 17.99 13.4965 17.55C13.4965 17.11 13.1365 16.75 12.6965 16.75Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Desenvolvimento Mobile</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">Formação criada para você que quer desenvolver aplicativos
                                mobile.</div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 9 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(9, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100">
                    <div class="carreiras-recomendadas-btn1">
                        <a id="ver-mais-carreiras-link2" class="carreiras-recomendadas-a" data-toggle="tab" href="#categoria-todas-as-carreiras">
                            Ver todas
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                    fill="#0D1C2E" />
                                <path
                                    d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                    fill="#0D1C2E" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carreiras-recomendadas">
                <div class="d-flex">
                    <div class="carreiras-recomendadas-title">
                        Pra você que curte explorar novas possibilidades em Python <span
                            class="carreiras-recomendadas-title-smiles">😜🧑‍💻</span>
                    </div>
                </div>
                <div class="carreiras-recomendadas-cards">
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M19.0938 16.75C18.6838 16.75 18.3438 16.41 18.3438 16V6.5C18.3438 5.81 17.7838 5.25 17.0938 5.25H11.5938C11.1838 5.25 10.8438 4.91 10.8438 4.5C10.8438 4.09 11.1838 3.75 11.5938 3.75H17.0938C18.6137 3.75 19.8438 4.98 19.8438 6.5V16C19.8438 16.41 19.5037 16.75 19.0938 16.75Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M14.0938 7.74993C13.9237 7.74993 13.7537 7.68995 13.6137 7.57995L10.6137 5.07995C10.4437 4.93995 10.3438 4.72993 10.3438 4.49993C10.3438 4.26993 10.4437 4.06991 10.6137 3.91991L13.6137 1.41991C13.9337 1.14991 14.4037 1.19995 14.6737 1.51995C14.9437 1.83995 14.8938 2.30995 14.5738 2.57995L12.2638 4.49993L14.5738 6.41991C14.8938 6.68991 14.9337 7.15991 14.6737 7.47991C14.5237 7.65991 14.3038 7.74993 14.0938 7.74993Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M19.0938 22.75C17.0238 22.75 15.3438 21.07 15.3438 19C15.3438 16.93 17.0238 15.25 19.0938 15.25C21.1637 15.25 22.8438 16.93 22.8438 19C22.8438 21.07 21.1637 22.75 19.0938 22.75ZM19.0938 16.75C17.8537 16.75 16.8438 17.76 16.8438 19C16.8438 20.24 17.8537 21.25 19.0938 21.25C20.3337 21.25 21.3438 20.24 21.3438 19C21.3438 17.76 20.3337 16.75 19.0938 16.75Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M12.5938 20.25H7.09375C5.57375 20.25 4.34375 19.02 4.34375 17.5V8C4.34375 7.59 4.68375 7.25 5.09375 7.25C5.50375 7.25 5.84375 7.59 5.84375 8V17.5C5.84375 18.19 6.40375 18.75 7.09375 18.75H12.5938C13.0037 18.75 13.3438 19.09 13.3438 19.5C13.3438 19.91 13.0037 20.25 12.5938 20.25Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M10.0947 22.7499C9.88465 22.7499 9.66467 22.6599 9.51467 22.4799C9.24467 22.1599 9.29464 21.6899 9.61464 21.4199L11.9246 19.4999L9.61464 17.58C9.29464 17.31 9.25467 16.84 9.51467 16.52C9.78467 16.2 10.2547 16.1599 10.5747 16.4199L13.5747 18.9199C13.7447 19.0599 13.8447 19.2699 13.8447 19.4999C13.8447 19.7299 13.7447 19.93 13.5747 20.08L10.5747 22.58C10.4347 22.69 10.2647 22.7499 10.0947 22.7499Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M5.09375 8.75C3.02375 8.75 1.34375 7.07 1.34375 5C1.34375 2.93 3.02375 1.25 5.09375 1.25C7.16375 1.25 8.84375 2.93 8.84375 5C8.84375 7.07 7.16375 8.75 5.09375 8.75ZM5.09375 2.75C3.85375 2.75 2.84375 3.76 2.84375 5C2.84375 6.24 3.85375 7.25 5.09375 7.25C6.33375 7.25 7.34375 6.24 7.34375 5C7.34375 3.76 6.33375 2.75 5.09375 2.75Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Programação em Python</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">O Desenvolvedor Salesforce é um talento valorizado, que atua
                                no desdobramento, configuração e implementação de soluções.</div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 6 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(6, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="category-card">
                        <div class="category-topo">
                            <div class="category-icon">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                        fill="none">
                                        <path
                                            d="M7.58815 15.75C7.30815 15.75 7.04815 15.6 6.91815 15.34C6.72815 14.97 6.87815 14.52 7.25815 14.33C8.12815 13.9 8.86815 13.24 9.39815 12.44C9.57815 12.17 9.57815 11.83 9.39815 11.56C8.85815 10.76 8.11815 10.1 7.25815 9.67002C6.87815 9.49002 6.72815 9.04002 6.91815 8.66002C7.09815 8.29002 7.54815 8.14002 7.91815 8.33002C9.01815 8.88002 9.95815 9.71002 10.6381 10.73C11.1481 11.5 11.1481 12.5 10.6381 13.27C9.95815 14.29 9.01815 15.12 7.91815 15.67C7.81815 15.72 7.69815 15.75 7.58815 15.75Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M17.6973 15.75H13.6973C13.2873 15.75 12.9473 15.41 12.9473 15C12.9473 14.59 13.2873 14.25 13.6973 14.25H17.6973C18.1073 14.25 18.4473 14.59 18.4473 15C18.4473 15.41 18.1073 15.75 17.6973 15.75Z"
                                            fill="#93D0E1" />
                                        <path
                                            d="M15.6973 22.75H9.69727C4.26727 22.75 1.94727 20.43 1.94727 15V9C1.94727 3.57 4.26727 1.25 9.69727 1.25H15.6973C21.1273 1.25 23.4473 3.57 23.4473 9V15C23.4473 20.43 21.1273 22.75 15.6973 22.75ZM9.69727 2.75C5.08727 2.75 3.44727 4.39 3.44727 9V15C3.44727 19.61 5.08727 21.25 9.69727 21.25H15.6973C20.3073 21.25 21.9473 19.61 21.9473 15V9C21.9473 4.39 20.3073 2.75 15.6973 2.75H9.69727Z"
                                            fill="#93D0E1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="category-name">Analista de Dados</div>
                        </div>
                        <div class="category-body">
                            <div class="category-desc">Essa formação é responsável por gerenciar toda gama de banco de
                                dados, da introdução à implementação.</div>
                            <div class="category-horas">
                                <div class="horas-svg">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="horas-text">80H DE ESTUDO</div>
                            </div>
                        </div>
                        <div class="category-nav">
                            <a href="<?php echo $categoryurl . '?categoryid=' . 11 ?>" class="d-flex">
                                <?php
                                // Retorna true se o usuário tiver inscrito em um curso desta categoria
                                $userEnrolled = is_user_enrolled_in_category(11, $USER->id);

                                // Mostra o texto do botão com base na inscrição do usuário
                                $button_text = $userEnrolled ? 'Continuar carreira' : 'Iniciar carreira';

                                echo '<div class="nav-text mr-2">' . $button_text . '</div>';
                                ?>
                                <div class="nav-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                            fill="#FFEC80" />
                                        <path
                                            d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                            fill="#FFEC80" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100">
                    <div class="carreiras-recomendadas-btn1">
                        <a id="ver-mais-carreiras-link3" class="carreiras-recomendadas-a" data-toggle="tab" href="#categoria-todas-as-carreiras">
                            Ver todas
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M14.4301 18.8201C14.2401 18.8201 14.0501 18.7501 13.9001 18.6001C13.6101 18.3101 13.6101 17.8301 13.9001 17.5401L19.4401 12.0001L13.9001 6.46012C13.6101 6.17012 13.6101 5.69012 13.9001 5.40012C14.1901 5.11012 14.6701 5.11012 14.9601 5.40012L21.0301 11.4701C21.3201 11.7601 21.3201 12.2401 21.0301 12.5301L14.9601 18.6001C14.8101 18.7501 14.6201 18.8201 14.4301 18.8201Z"
                                    fill="#0D1C2E" />
                                <path
                                    d="M20.33 12.75H3.5C3.09 12.75 2.75 12.41 2.75 12C2.75 11.59 3.09 11.25 3.5 11.25H20.33C20.74 11.25 21.08 11.59 21.08 12C21.08 12.41 20.74 12.75 20.33 12.75Z"
                                    fill="#0D1C2E" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () { // função que seleciona a TAB todas as carreiras ao clicar em ver mais carreiras e ver todas.
        const verMaisCarreirasLink = document.getElementById("ver-mais-carreiras-link");
        const verMaisCarreirasLink2 = document.getElementById("ver-mais-carreiras-link2");
        const verMaisCarreirasLink3 = document.getElementById("ver-mais-carreiras-link3");
        const todasAsCarreirasTab = document.getElementById("categoria-todas-as-carreiras-link");

        function clickTodasAsCarreirasTab(event) {
            todasAsCarreirasTab.click();
            window.scrollTo({ top: 0, behavior: 'smooth' }); // volta a tela para o topo.
        }

        verMaisCarreirasLink.addEventListener("click", clickTodasAsCarreirasTab);
        verMaisCarreirasLink2.addEventListener("click", clickTodasAsCarreirasTab);
        verMaisCarreirasLink3.addEventListener("click", clickTodasAsCarreirasTab);
    });
</script>