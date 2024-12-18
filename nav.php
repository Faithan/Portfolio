


<nav>
    <div class="image-container">
        <img src="system_images/me1.jpg" alt="">
        <label for="">KHEMARK OCARIZA</label>
    </div>

    <ul>
        <li><a href="">HOME</a></li>
        <li><a href="">ABOUT</a></li>
        <li><a href="">PROJECTS</a></li>
        <li><a href="">CONTACT</a></li>
    </ul>
</nav>

<style>
    


/* header */
/* navigation */
nav {
    height: 80px;
    width: 100%;
    background-color: var(--background-color);
    position: sticky;
    position: -webkit-sticky;
    display: flex;
    justify-content: space-between;
    align-items: center;
    top: 0;
    z-index: 1000;
    /* border-bottom: 1px solid var(--color7); */
    box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
}

.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

.image-container label {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-color);
    cursor: pointer;
}

.image-container label:hover {
    color: var(--color10);
    transition: ease-in-out .3s;
}

.image-container img {
    height: 40px;
    width: 40px;
    margin-left: 50px;
    border-radius: 50%;
    padding: 5px;
    background-image: linear-gradient(to bottom right, #3a7bd5, #3a6073, #3acfd5);
    -webkit-clip-path: polygon(50% 0%, 80% 10%, 100% 35%, 100% 65%, 80% 90%, 50% 100%, 20% 90%, 0 65%, 0 35%, 20% 10%);
    clip-path: polygon(50% 0%, 80% 10%, 100% 35%, 100% 65%, 80% 90%, 50% 100%, 20% 90%, 0 65%, 0 35%, 20% 10%);
}


nav ul {
    display: flex;
    gap: 50px;
    margin-right: 100px;
    list-style: none;
}

nav ul li {
    display: inline;
}

nav ul li a {
    text-decoration: none;
    display: block;
    color: var(--text-color);
    font-size: 1.4rem;
    font-weight: 600;
    white-space: nowrap;
    line-height: 85px;
}

nav ul li a:hover {
    color: var(--color10);
    transition: ease-in-out .3s;
}


</style>

