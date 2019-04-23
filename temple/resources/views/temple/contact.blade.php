@extends('master.layout')

@section('content')
<h1>Contact Us</h1>
<div class="bs-callout">
<table>

<tr>

    <td>

        <p><b>

            Temple Address:</b><br>

            Adhya Shakti Mataji Temple<br>

            55, High Street, Cowley, Uxbridge<br>

            Middlesex UB8 2DZ

        </p>

        <p><b>

            Registered Charity Address:</b><br>

            Navratri Garba (Registered Charity No 1089024)<br>

            123, Estcourt Road, Fulham,<br>

            London SW6 7HB

        </p>

        <p><b>

            Contact Numbers:</b><br>

            Mobile : 078 8225 3540

        </p>                                        

    </td>

    <td>                                    

        <div style="width:610px; margin-left: 40px; height:400px;">

            <div id="frag_8" style="text-align:left;">

                <iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Uxbridge,+UB8+2DZ,+UK&amp;aq=0&amp;sll=51.52986,-0.482398&amp;sspn=0.007102,0.017574&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=UB8+2DZ,+United+Kingdom&amp;t=m&amp;ll=51.529839,-0.482368&amp;spn=0.018689,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed">

                </iframe><br>

                <small>

                    <a href="http://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Uxbridge,+UB8+2DZ,+UK&amp;aq=0&amp;sll=51.52986,-0.482398&amp;sspn=0.007102,0.017574&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=UB8+2DZ,+United+Kingdom&amp;t=m&amp;ll=51.529839,-0.482368&amp;spn=0.018689,0.051498&amp;z=14&amp;iwloc=A" style="color:#7b0d0d;text-align:left">View Larger Map</a>

                </small>

            </div>

        </div>                                    

    </td>  

</tr>

<tr>

    <td colspan="2">

        <div class="content">

                <form  id="contact_form" method="post" action="contact.php" novalidate="validate" >

                    <div class="clearfix">

                        <div class="col-md-6">

                            <div>

                                <label for="name">Name *</label> 

                                <input name="name" type="text" class="validate['required'] textbox1" placeholder="* Name : "onfocus="this.placeholder = ''" onBlur="this.placeholder = '* Name :'"

                                required data-validation-required-message="Please enter your name."/>

                                <p class="help-block text-danger"></p>

                            </div>



                            <div class="control-group">

                                <label for="telephone">Telephone</label>

                                <input name="phone" type="text" class="validate['required','phone']  textbox1"

                                placeholder="* Phone : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Phone :'"/>

                            </div>



                            <div class="control-group">

                                <label for="email">Email Address *</label>

                                <input name="email" type="text" class="validate['required','email']  textbox1"

                                placeholder="* Email : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Email :'"/>

                            </div>        



                        </div>

                        <div class="col-md-6 text-left">

                            <div class="control-group">

                                <label for="comments">Message *</label>

                                <textarea name="message" cols="" rows="" class="validate['required'] messagebox1"

                                placeholder="* Message : " onFocus="this.placeholder = ''" onBlur="this.placeholder = '* Message :'"></textarea>

                            </div>

                        </div>

                    </div>

                    <div class="clearfix"></div>

                        <div class="clearfix">

                            <div class="col-md-12">

                                <div class="clearfix text-center">

                                    <div class="clearfix">

                                        <input type="submit" value="Send Message" class="btn-3" target="_blank"/>

                                    </div>

                                </div>

                            </div>

                        </div>

                </form>
        </div>

    </td>

</tr>

</table>
</div>
@endsection