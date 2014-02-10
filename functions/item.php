<?php

function item($image,$user,$description,$link) {
	echo ' <div class="article">
            <div class="picture">
                <img src="'.$image.'" width="100%">
            </div>
            <div class="desc">
                <ul>
                    <li>User :
                        <span class="name">'.$user.'</span>
                    </li>
                    <li>Description :
                        <p>'.$description.'</p>
                    </li>
                </ul>

                <a class="downloadlink" href="'.$link.'">
                    <button class="download">DOWNLOAD</button>
                </a>
                </button>
            </div>
        </div>';
}

?>