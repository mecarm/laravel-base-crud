<div class="container-blu">
    <div>
        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="Digital comics">
        <div>DIGITAL COMICS</div>
    </div>
    <div>
        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="Digital comics">
        <div>DC MERCHANDISE</div>
    </div>
    <div>
        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="Digital comics">
        <div>SUBSCRIPTION</div>
    </div>
    <div>
        <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="Digital comics">
        <div>COMIC SHOP LOCATOR</div>
    </div>
    <div>
        <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="Digital comics">
        <div>DC POWER VISA</div>
    </div>
  </div>
    <div class="footer">
        <div class="footer-bg">
            <div class="list">
                <div id="list">
                    <ul>
                        <h3>DC COMICS</h3>
                        <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>Tv</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <ul>
                    <h3>DC COMICS</h3>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div id="list">
                <ul>
                    <h3>DC</h3>
                    <li>Term Of Use</li>
                    <li>Privacy Policy(New)</li>
                    <li>Ad Choises</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subiscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div id="list">
                <ul>
                    <h3>SITES</h3>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
        </div>
        <div class="dc-bg">
            <!-- <img src="../assets/img/dc-logo-bg.png" alt=""> -->
        </div>
    
    </div>
    <div class="social">
        <div>
            <div>
                <button>SIGN UP NOW!</button>
            </div>
            <div class="follow">
                <div>
                    <strong>FOLLOW US</strong>
                </div>
                <div class="icon">
                    <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                    <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                    <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                    <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                    <img src="{{ asset('img/footer-periscope.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
        .container-blu {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #0082F9;
    padding: 50px 0;
}

.container-blu>div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 15px;
    font-size: 0.8rem;
    color: white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.container-blu>div>img {
    height: 50px;
    max-width: 50px;
}

.footer{
    background-color: rgb(63, 58, 58);
    color: white;
}

.list {
    text-align: start;
    color: white;
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
}

#list>ul>li {
    list-style: none;
    color: lightgray;
    margin-right: 20px;
    font-size: 0.8rem;
    line-height: 22px;
    cursor: pointer;
}
#list>ul>h3{
    font-size: 1.0rem;
    margin-left: 10px;
    margin-top: 10px;
}

#list > ul {
    display: block;
}

.footer-bg{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.social{
    background: rgb(44, 44, 44);
    padding: 30px;
}

.social div:first-child{
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin: auto;
}

.follow div:first-child {
    margin-right: 5px;
    color: #0082F9;
    width: 100px;
}

.follow div:last-child > img{
    margin: 0 5px;
}

.follow, .icon{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

button{
    padding: 10px;
    border: 2px solid #0082F9;
    background-color: rgba(0, 0, 0, 0);
    color: white;
}
    </style>