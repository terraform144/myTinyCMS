const menutopTemplate = document.createElement('template');
menutopTemplate.innerHTML = `
<style>
.top_menu {
    width: 100%;
    position: fixed;
    top: 0;
    /* border-bottom:2px solid #ddd; */
    height:40px;
    background-color:#000;
    z-index:999;
}
.top_menu ul {
    list-style-type: none;
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    margin:10px;padding-left:15px;padding-right:15px;
}
.top_menu ul li {
    color:white;
}

</style>

<div class="top_menu">
<ul>
<li id="bVIP"><svg width="25px" height="25px" viewBox="0 0 1000 1000" style="fill:red" enable-background="new 0 0 1000 1000" xml:space="preserve">
<g><path d="M653,522.2c-6.8,0-12,0.2-15.6,0.6v94.5H652c11.7,0,21.2-1.2,28.4-3.5c7.2-2.4,13.2-7.3,18.1-14.8c4.8-7.5,7.2-16.8,7.2-27.8c0-16.8-4.1-29.2-12.4-37.1C685,526.1,671.6,522.2,653,522.2z"/><path d="M778.2,864.8h-559c-14.2,0-25.6,13.4-25.6,29.9c0,16.5,11.5,29.9,25.6,29.9h559c14.1,0,25.6-13.4,25.6-29.9C803.8,878.2,792.3,864.8,778.2,864.8z"/><path d="M916.2,239.6c-40.8,0-73.8,38.6-73.8,86.2c0,18.2,4.9,35.1,13.2,49c-38.9,25.5-77.4,61.8-140.4,61.8c-10.2,0-20.1-1-29.3-2.9c-99.1-20.8-152-155.3-157.3-195c24.6-14,41.6-43.1,41.6-77.2c0-47.6-33-86.2-73.8-86.2c-40.8,0-73.8,38.6-73.8,86.2c0,37,20,68.2,48,80.5c-5,44.1-55.9,182.7-152.3,198.8c-7.8,1.3-16,2-24.5,2c-62.5,0-100.8-35.1-142.2-62c3.7-10.3,5.8-21.6,5.8-33.4c0-47.6-33-86.2-73.8-86.2c-20,0-38,9.4-51.3,24.4l-1.3-1.1l0.6,1.8C18.3,301.8,10,323.4,10,347.3c0,47.5,33,86.1,73.7,86.1l119.6,372.2h591.3L923.7,411c37.2-4.4,66.3-40.7,66.3-85.2C990,278.2,957,239.6,916.2,239.6z M456.4,523.7c-6.3,0.2-11.9,2.5-16.7,6.8c-4.8,4.3-9,10.6-12.5,19l-13.7,32l-60.6,144.1h-9.3l-70.4-162.2c-1.3-2.9-3.4-7.9-6.2-15c-3.9-9.6-8-16.1-12.3-19.4c-4.3-3.3-11.3-5.1-20.9-5.3v-6.9h87.9v6.9c-10.9,0-18.3,0.8-22,2.4c-3.8,1.6-5.6,4.7-5.6,9.2c0,2.9,2.4,9.7,7.1,20.5l58.7,135.4l47.1-112.7c7.9-18.9,11.9-31.1,11.9-36.9c0-11.5-8.2-17.5-24.5-17.9v-6.9h62.3L456.4,523.7L456.4,523.7z M558.7,523.7h-4.4c-10,0-16.6,0.8-19.7,2.5c-3.1,1.7-5.2,4.7-6.2,9.3c-1.1,4.5-1.6,15.2-1.6,32.2v100c0,16,0.4,26.6,1.1,31.5c0.8,5,2.8,8.7,6,11.1c3.3,2.4,9.5,3.6,18.7,3.6h6v6.9h-93.3v-6.9h6c8.7,0,14.8-1.1,18.1-3.3c3.4-2.2,5.5-5.6,6.4-10.3c0.9-4.7,1.4-15.5,1.4-32.6v-100c0-16.2-0.5-26.7-1.4-31.4c-0.9-4.7-2.9-8-6-9.8c-3.1-1.8-9.8-2.7-20.2-2.7h-4.4v-6.9h93.3V523.7z M730.1,598.7c-5,8.5-12.1,15-21.4,19.4c-9.3,4.4-25.6,6.6-49,6.6h-22.4v42.9c0,16,0.4,26.6,1.1,31.5c0.8,5,2.8,8.7,6.1,11.1s9.5,3.6,18.7,3.6h6.8v6.9h-93.4v-6.9h5.4c8.7,0,14.8-1.1,18.1-3.3c3.4-2.2,5.5-5.6,6.4-10.3c0.9-4.7,1.4-15.5,1.4-32.6v-100c0-16.2-0.5-26.7-1.4-31.4c-0.9-4.7-2.9-8-6-9.8c-3.1-1.8-9.8-2.7-20.2-2.7h-3.8v-6.9l25.6-0.9c20.5-0.7,36.4-1.1,47.8-1.1c21.1,0,37.3,1.7,48.7,5c11.4,3.3,20.7,9.2,28,17.6c7.3,8.4,10.9,19.1,10.9,31.9C737.6,580.4,735.1,590.2,730.1,598.7z"/></g>
</svg></li>
<li><strong>Temporis Academy</strong></li>
<li><svg style="fill:#000" width="25px" height="25px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
<g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M4485.5,4975.3c-20.4-22.5-61.3-202.1-106.2-475.7c-40.8-240.9-83.7-459.4-93.9-481.8c-12.3-32.7-42.9-47-114.3-59.2c-53.1-8.2-183.8-40.8-292-73.5l-196-59.2l-81.7,93.9c-44.9,53.1-187.8,220.5-316.5,373.6c-153.1,181.7-251.1,279.7-281.7,283.8c-30.6,4.1-181.7-71.5-428.8-212.3c-428.8-245-453.3-263.4-453.3-324.6c0-22.5,71.5-238.9,161.3-479.8l161.3-439l-226.6-228.7l-224.6-228.7l-73.5,28.6c-292,114.3-814.6,296-849.3,296c-61.3,0-79.6-22.5-324.6-453.3c-140.9-247-216.4-398.1-212.3-428.8c4.1-30.6,102.1-128.6,283.8-281.7c153.1-128.6,320.5-271.5,373.6-316.5l93.9-81.7l-59.2-196c-32.7-108.2-65.3-238.9-73.5-292c-12.3-71.5-26.5-102.1-59.2-114.3c-22.5-10.2-234.8-51-471.6-91.9c-236.8-40.8-449.2-87.8-475.7-104.1C100,600,100,593.9,100,112c0-436.9,4.1-488,36.7-516.5c20.4-20.4,202.1-61.3,463.5-106.2c236.8-40.8,449.2-79.6,473.7-83.7c32.7-8.2,51-34.7,67.4-98c10.2-47,44.9-177.6,77.6-289.9c30.6-112.3,55.1-212.3,55.1-220.5c0-10.2-165.4-157.2-367.5-326.7c-245-208.3-369.5-326.7-373.6-357.3c-4.1-30.6,71.5-181.7,212.3-428.8c247-432.8,263.4-453.3,324.6-453.3c24.5,0,240.9,73.5,481.8,161.3l436.9,161.3l228.7-226.6l228.7-224.6l-28.6-73.5c-114.3-292-296-814.6-296-849.3c0-61.3,22.5-77.6,453.3-324.6c247-140.9,398.1-216.4,428.8-212.3c30.6,4.1,145,122.5,343,357.3c163.3,194,306.3,359.3,316.5,371.6c14.3,12.2,87.8,0,216.4-38.8c108.2-30.6,238.9-63.3,292-71.5c71.5-12.2,102.1-26.5,114.3-59.2c10.2-22.5,53.1-240.9,93.9-481.8c44.9-269.5,87.8-453.3,106.2-473.7c28.6-32.7,79.6-36.7,516.5-36.7c481.8,0,488,0,516.6,47c16.3,24.5,63.3,236.8,104.1,473.7c40.8,236.8,81.7,449.2,91.9,471.6c12.2,32.7,42.9,47,114.3,59.2c53.1,8.2,183.8,40.8,292,73.5l196,59.2l81.7-93.9c44.9-53.1,187.8-220.5,316.5-373.6c153.1-179.7,251.1-279.7,281.7-283.8c28.6-4.1,183.8,71.5,428.8,212.3c432.8,249.1,453.3,263.4,453.3,324.6c0,24.5-73.5,240.9-161.3,481.8l-161.3,436.9l224.6,228.7l226.6,228.7l73.5-28.6c292-114.3,814.6-296,849.3-296c61.3,0,77.6,22.5,324.6,453.3c140.9,245,216.4,398.1,212.3,428.8c-4.1,30.6-130.7,151.1-373.6,357.3c-202.1,169.5-365.5,322.6-363.4,336.9c0,14.3,34.7,151.1,73.5,302.2c53.1,204.2,81.7,277.7,110.3,289.9c20.4,8.2,230.7,47,465.5,87.8c236.8,40.8,449.2,87.8,475.7,104.1C9900-380,9900-373.9,9900,110s0,490-44.9,518.6c-26.5,16.3-238.9,63.3-475.7,104.1c-234.8,40.8-445.1,79.6-465.5,87.8c-28.6,12.3-57.2,83.7-110.3,289.9c-38.8,151.1-71.5,287.9-73.5,302.2c-2.1,14.3,161.3,165.4,363.4,336.9c245,208.3,369.5,326.7,373.6,357.3c4.1,30.6-71.5,181.7-212.3,428.8c-247.1,430.8-263.4,453.3-324.6,453.3c-34.7,0-557.4-181.7-849.3-296l-73.5-28.6l-224.6,228.7l-226.6,228.7l161.3,439c87.8,240.9,161.3,457.3,161.3,481.8c0,59.2-22.5,75.5-453.3,322.6c-247,140.9-398.1,216.4-428.8,212.3c-30.6-4.1-128.6-102.1-281.7-283.8c-128.6-153.1-271.5-320.5-316.5-373.6l-81.7-93.9l-196,59.2c-108.2,32.7-238.9,65.3-292,73.5c-71.5,12.3-102.1,26.5-116.4,59.2c-8.2,22.5-51,236.8-89.8,471.6c-40.8,236.8-87.8,449.2-104.1,475.7c-28.6,44.9-34.7,44.9-516.6,44.9C4565.1,5010,4514.1,5005.9,4485.5,4975.3z M5359.3,2386.5c496.1-79.6,906.5-292,1265.8-651.3C7094.7,1265.6,7335.7,647,7301,1.8c-14.3-281.7-61.3-492.1-165.4-751.3c-116.4-287.9-283.8-539-510.4-765.6C6027-2115.4,5165.4-2338,4356.9-2105.2c-357.3,104.1-675.8,292-961.6,565.5C2597-772,2466.3,448.9,3082.9,1396.3c112.3,171.5,459.4,518.6,630.9,630.9C4211.9,2351.7,4793.8,2478.3,5359.3,2386.5z"/></g></g>
</svg></li>
</ul>
</div>
`;

class TopMenu extends HTMLElement {
    constructor() {
        // Always call super first in constructor
        super();
    }

    connectedCallback() {
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.appendChild(menutopTemplate.content);

        try {
            /** Onclick events to change pages*/ 
            this.shadowRoot.getElementById('bVIP').onclick = 
            () => {
                    $("#content").html('');
                    $('#main_application').slideDown();
                    switchToScene("#vip");
                    acheterButton();
                };

        }catch(ex) {
// console.log(ex);
        }
       
    }
}

customElements.define('menutop-component', TopMenu);