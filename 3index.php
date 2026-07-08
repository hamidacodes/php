 </select>

    <button id ="show_exchange_btn">Hesabla</button>
    


    <p id="show_exchange">Netice burada gosterilecek...</p>
    

    <script>
        document.getElementById("show_exchange_btn").addEventListener("click",function () {

                console.log('duymeni basdiniz');
            const amount    =    document.getElementById("number").value;
            const currency  =    document.getElementById("currency").value;

            console.log(amount);
            console.log(currency);
        })
    </script>
</body>