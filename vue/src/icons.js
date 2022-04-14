import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from "@fortawesome/fontawesome-svg-core";

/* Import the icons used here. Refer to fontawesome docs for */
/* the names of the icons. Then, register them by using the  */
/* add() method of the library.                              */

import { faXmark } from "@fortawesome/free-solid-svg-icons";
import { faCheck } from "@fortawesome/free-solid-svg-icons";
import { faAngleLeft } from "@fortawesome/free-solid-svg-icons";

library.add([faXmark, faCheck, faAngleLeft]);

export default FontAwesomeIcon;
