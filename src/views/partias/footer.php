
    <style>
        .footer {
            background: #343a40; /* Cor de fundo escura */
            color: white; /* Cor do texto */
            padding: 20px 0; /* Padding superior e inferior */
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1); /* Sombra leve */
        }
        .footer h5 {
            font-weight: bold; /* Negrito */
            margin-bottom: 15px; /* Espaçamento inferior */
        }
        .footer-link {
            color: white; /* Cor dos links */
            transition: color 0.3s; /* Transição suave */
        }
        .footer-link:hover {
            color: #007bff; /* Cor ao passar o mouse */
        }
        .footer-icon {
            color: white; /* Cor dos ícones */
            margin: 0 10px; /* Margem entre ícones */
            font-size: 1.5rem; /* Tamanho dos ícones */
            transition: color 0.3s; /* Transição suave */
        }
        .footer-icon:hover {
            color: #007bff; /* Cor ao passar o mouse */
        }
    </style>

    <footer class="footer">
        <div class="container text-center py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <p>Email: contato@clubedemembros.com</p>
                    <p>Telefone: (11) 1234-5678</p>
                </div>
                <div class="col-md-4">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="/projeto_Luan/panel/clube/" class="footer-link">Membros</a></li>
                        <li><a href="create" class="footer-link">Criar Membro</a></li>
                        <li><a href="edit" class="footer-link">Edição</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Siga-nos</h5>
                    <a href="#" class="footer-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="mt-4">
                <p>&copy; 2024 Clube de Membros. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
