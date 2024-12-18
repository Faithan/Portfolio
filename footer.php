<footer>
    <div class="footer-info-container">
        <div class="footer-info">
            <h1>Khemark Ocariza</h1>
            <p>I'm a versatile Web Developer specializing in both front-end and back-end development. I create
                seamless
                user experiences and robust server-side functionality. Explore my work in the Projects section.
                Connect
                with me on any of my social media accounts for insights on web development and programming. I'm also
                open to
                exciting job opportunities—let's connect!</p>
        </div>
        <div class="footer-social-info">
            <h1>Social</h1>
            <div class="footer-social-container">
                <a href="https://linkedin.com/in/yourprofile" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/yourprofile" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/yourprofile" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://facebook.com/yourprofile" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://instagram.com/yourprofile" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="copyright-container">
        <p>© Copyright <span id="current-year"></span>. Made by <a href="">Khemark Ocariza</a></p>
    </div>

    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>

</footer>


<style>
    
/* footer */
footer{
    padding: 50px 200px 0 200px;
    background-color: black;
   
}

.footer-info-container{
    display: flex;
    flex: row;
    justify-content: space-between;
    margin-bottom: 50px;
}


.footer-info{
    display: flex;
    flex-direction: column;
    gap: 20px;
    flex-grow: 1;
}

.footer-info p{
    max-width: 500px;
    line-height: 1.5;
    font-size: 1.2rem;
    text-align: justify;
}

.footer-social-info{
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}


.footer-social-info .footer-social-container{
    display: flex;
    flex-direction: row;
    gap: 20px;
}




.footer-social-container a {
    color: var(--text-color);
    /* Default color */
    font-size: 2rem;
    /* Icon size */
    text-decoration: none;
    border-radius: 4px;
}

.footer-social-container a:hover {
    transition: ease-in-out .3s;
    color: var(--color11);
}

.copyright-container{
    border-top: 1px solid var(--color7);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
}

.copyright-container a{
    text-decoration: none;
    color: var(--text-color);
    font-weight: bold;
}





</style>