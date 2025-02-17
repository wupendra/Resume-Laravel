
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $user->name }}/title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800);
@charset "utf-8";
@-webkit-viewport   { width: device-width; }
@-moz-viewport      { width: device-width; }
@-ms-viewport       { width: device-width; }
@-o-viewport        { width: device-width; }
@viewport           { width: device-width; }

body{
  font-family: 'Open Sans', Arial, Tahoma;
  font-weight: 400;
  color: #363636;
  background: #334960;
}
blockquote {
  font-size: 1em;
}

.container{
  margin-top: 80px;
  margin-bottom: 15px;
  background: #fff;
}

#photo-header{
  margin-top: -75px;
}
#photo{
  width: 160px;
  height: 160px;
  border-radius: 50%;
  overflow: hidden;
  padding: 5px;
  background: #334960;
  display: inline-block;
}
#photo img{
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
#text-header h1{
  margin: 0;
  padding: 0;
  font-size: 1.5em;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: -1px;
}
#text-header h1::first-line{
  font-size: 1.5em;
  font-weight: 800;
  line-height: 1.5em;
}
#text-header h1 span{
  color: #334960;
  opacity: 0.7;
}
#text-header h1 sup{
  opacity: 0.5;
}
#text-header:after{
  width: 100%;
  height: 3px;
  border-bottom: 1px solid #ddd;
  margin-top: 15px;
  content: '';
  display: block;
}

.box{
  padding-bottom: 10px;
  margin-bottom: 25px;
}
.box h2{
  color: #227c74;
  font-size: 1.5em;
  font-weight: 700;
  text-transform: uppercase;
}

#awards,
#education{
  margin-top: 20px;
  margin-bottom: 0;
  position: relative;
  padding: 1em 0;
  list-style: none;
}
#awards:before,
#education:before {
  width: 5px;
  height: 100%;
  position: absolute;
  left: 35px;
  top: 0;
  content: ' ';
  display: block;
  background: #32475c;
  background: -moz-linear-gradient(top,  #ffffff 0%, #32475c 7%, #32475c 89%, #ffffff 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(7%,#32475c), color-stop(89%,#32475c), color-stop(100%,#ffffff));
  background: -webkit-linear-gradient(top,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
  background: -o-linear-gradient(top,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
  background: -ms-linear-gradient(top,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
  background: linear-gradient(to bottom,  #ffffff 0%,#32475c 7%,#32475c 89%,#ffffff 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 );
}
#awards li,
#education li{
  width: 100%;
  z-index: 2;
  position: relative;
  float: left;
}
#awards .year,
#education .year{
  width: 14%;
  background: #fff;
  padding: 10px;
  font-weight: 700;
  display: inline-block;
}
#awards .description,
#education .description{
  width: 83%;
  display: inline-block;
  background: #eee;
  margin-bottom: 10px;
  position: relative;
  padding: 10px;
  border-bottom: 1px solid #ccc;
  border-right: 1px solid #ccc;
}
#awards .description:after,
#education .description:after {
  content: '';
  position: absolute;
  top: 15px;
  right: 0;
  left: -16px;
  height: 0;
  width: 0;
  border: solid transparent;
  border-right-color: #eee;
  border-width: 8px;
  pointer-events: none;
}
#awards .description h3,
#education .description h3{
  font-size: 1.2em;
  margin: 0;
  padding: 0;
  font-weight: 700;
}
#awards .description p,
#education .description p{
  margin-top: 5px;
  padding: 0;
}

.job{
  margin-bottom: 15px;
}
.job .details {
  margin-left: 3%;
  width: 95%;
  padding: 10px;
  margin-bottom: 10px;
  background: #eee;
  border-bottom: 1px solid #ccc;
  border-right: 1px solid #ccc;
}
.job .where{
  font-size: 1.2em;
  font-weight: bold;
}
.job .year{
  opacity: 0.7;
}
.job .profession{
  font-size: 1.2em;
  font-weight: bold;
}
.job .description{
  line-height: 1.5em;
}
.job .highlights{
  padding: 5px 0;
  font-weight: bold;
}
.job .job-details {
  padding-left: 5%;
  width: 100%;
}
.publication {
  margin-bottom: 0;
}
.publication .name{
  font-size: 1em;
  font-weight: bold;
}
.publication .year{
    opacity: 0.7;
}
.publication p{
  margin: 0;
  padding-top: 10px;
}

.contact-item{
  width: 100%;
  float: left;
}
.contact-item .icon{
  padding: 10px;
  border-right: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  color: #32475c;
  background: #eee;
}
.contact-item:last-child .icon{
  border-bottom: none;
}
.contact-item .title{
  width: 80%;
  width: calc(100% - 55px);
  font-weight: 700;
  opacity: 0.9;
}
.contact-item .title.only{
  margin-top: 10px;
}
.contact-item .description{
  width: 80%;
  width: calc(100% - 55px);
  color: #334960;
}

.item-interests,
.item-skills{
  height: 30px;
  color: #334960;
  padding: 5px 10px;
  margin-bottom: 5px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 1.1em;
  font-weight: 600;
}
.interest,
.skill{
  color: #fff;
  display: inline-block;
  margin-right: 5px;
  margin-bottom: 5px;
  padding: 5px 10px;
  background: #32475c;
  position: relative;
  font-size: .85em;
}
.skill-level {
  background-color: #227c74;
  border-radius: 4px;
  color: #fff;
  padding: 1px 8px;
  font-size: .75em;
  position: absolute;
  margin: 1px 10px;
}

#language-skills .skill{
  margin: 10px 0;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

    </style>
    <style type="text/css" media="print">
    body {
  font-size: .95em;
  -webkit-print-color-adjust: exact;
}

a[href]:after {
  content: none !important;
}

#photo{
  display: none;
}

.box {
  margin-bottom: -10px;
}

blockquote,
#education,
#awards,
.contact-item,
.publication,
.skills,
.interests {
  page-break-inside: avoid;
}

.col-sm-5{
  width: 40%;
  padding: 0 15px;
}

.col-sm-7{
  width: 60%;
  padding: 0 15px;
}

.skills .col-sm-offset-1,
.interests .col-sm-offset-1{
  margin-top: -10px;
  margin-bottom: 5px;
}

#education {
  margin: 0;
  margin-bottom: -20px;
}
#awards:before,
#education:before {
  background: none;
}

#awards .description,
#education .description,
.job .details {
  border: 1px solid #eee;
}
.publication,
.publication .panel-heading,
.publication .name{
  margin: 0;
  padding: 0 5px;
  border: none;
}
.publication .panel-body {
  padding: 0 10px;
  margin: 0;
}

.badge {
  margin: 0;
}

.list-group-item{
  border: none;
  margin: 0;
  padding: 5px 15px;
}
.list-group-item:after{
  content: '';
  position: absolute;
  top: 8px;
  right: 0;
  left: -1px;
  height: 0;
  width: 0;
  border: solid transparent;
  border-right-color: #999;
  border-width: 4px;
  pointer-events: none;
 }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              <img src="&#x2F;&#x2F;www.gravatar.com&#x2F;avatar&#x2F;7e6be1e623fb85adde3462fa8587caf2?s&#x3D;200&amp;r&#x3D;pg&amp;d&#x3D;mm" alt="avatar">
            </div>
            <div id="text-header" >
              <h1>Richard Hendriks<br><span>Programmer</span></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-7">
          <!-- ABOUT ME -->
          <div class="box">
            <h2><i class="fa fa-user ico"></i> About</h2>
            <p>Richard hails from Tulsa. He has earned degrees from the University of Oklahoma and Stanford. (Go Sooners and Cardinals!) Before starting Pied Piper, he worked for Hooli as a part time software developer. While his work focuses on applied information theory, mostly optimizing lossless compression schema of both the length-limited and adaptive variants, his non-work interests range widely, everything from quantum computing to chaos theory. He could tell you about it, but THAT would NOT be a “length-limited” conversation!</p>
          </div>
          <!-- WORK EXPERIENCE -->
          <div class="box">
            <h2><i class= "fa fa-suitcase ico"></i> Work Experience</h2>
              <div class="job clearfix">
                <div class="row">
                  <div class="details">
                    <div class="where">Pied Piper</div>
                    <div class="address">
                      <a href="http:&#x2F;&#x2F;piedpiper.com" target= "_blank"><i class="fa fa-globe ico"></i> http:&#x2F;&#x2F;piedpiper.com</a>
                    </div>
                    <div class="year">December 2013 – December 2014</div>
                  </div>
                </div>
                <div class="row">
                  <div class="job-details col-xs-11">
                    <div class="profession">CEO&#x2F;President</div>
                    <div class="description">
                      Pied Piper is a multi-platform technology based on a proprietary universal compression algorithm that has consistently fielded high Weisman Scores™ that are not merely competitive, but approach the theoretical limit of lossless compression.
                      <div class="highlights">Highlights</div>
                      <ul class="list-group">
                        <li class="list-group-item">Build an algorithm for artist to detect if their music was violating copy right infringement laws</li>
                        <li class="list-group-item">Successfully won Techcrunch Disrupt</li>
                        <li class="list-group-item">Optimized an algorithm that holds the current world record for Weisman Scores</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- AWARDS -->
          <div class="box">
            <h2><i class="fa fa-certificate ico"></i> Awards</h2>
            <ul id="awards" class="clearfix">
              <li>
                <div class="year pull-left">November  2014</div>
                <div class="description pull-right">
                  <h3>Techcrunch</h3>
                  <p><i class="fa fa-trophy ico"></i> Digital Compression Pioneer Award</p>
                  <p>There is no spoon.</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- VOLUNTEER -->
          <div class="box">
            <h2><i class= "fa fa-group ico"></i> Volunteer</h2>
              <div class="job clearfix">
                <div class="row">
                  <div class="details">
                    <div class="where">CoderDojo</div>
                    <div class="address">
                      <a href="http:&#x2F;&#x2F;coderdojo.com&#x2F;" target= "_blank"><i class="fa fa-globe ico"></i> http:&#x2F;&#x2F;coderdojo.com&#x2F;</a>
                    </div>
                    <div class="year">January 2012 – January 2013</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-11 pull-right">
                    <div class="profession">Teacher</div>
                    <div class="description">
                      Global movement of free coding clubs for young people.
                      <div class="highlights">Highlights</div>
                      <ul class="list-group">
                        <li class="list-group-item">Awarded 'Teacher of the Month'</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-5">
          <!-- CONTACT -->
          <div class="box clearfix">
            <h2><i class="fa fa-bullseye ico"></i> Contact</h2>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-map-marker fa-fw"></span></div>
              <div class="title pull-right">2712 Broadway St</div>
              <div class="title  pull-right">San Francisco, California CA 94115 US</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-phone fa-fw"></span></div>
              <div class="title only pull-right">(912) 555-4321</div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-envelope fa-fw"></span></div>
              <div class="title only pull-right"><a href="mailto:richard@valley.com" target="_blank">richard@valley.com</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-globe fa-fw"></span></div>
              <div class="title only pull-right"><a href="http:&#x2F;&#x2F;richardhendricks.com" target="_blank">http:&#x2F;&#x2F;richardhendricks.com</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-twitter fa-fw"></span></div>
              <div class="title pull-right">Twitter</div>
              <div class="description pull-right"><a href="" target="_blank">neutralthoughts</a></div>
            </div>
            <div class="contact-item">
              <div class="icon pull-left text-center"><span class="fa fa-soundcloud fa-fw"></span></div>
              <div class="title pull-right">SoundCloud</div>
              <div class="description pull-right"><a href="https:&#x2F;&#x2F;soundcloud.com&#x2F;dandymusicnl" target="_blank">dandymusicnl</a></div>
            </div>
          </div>
          <!-- EDUCATION -->
          <div class="box">
            <h2><i class="fa fa-university ico"></i> Education</h2>
            <ul id="education" class="clearfix">
              <li>
                <div class="year pull-left">2011 2014</div>
                <div class="description pull-right">
                  <h3>University of Oklahoma</h3>
                  <p><i class= "fa fa-graduation-cap ico"></i> Bachelor</p>
                  <p>Information Technology</p>
                  <p>
                    GPA: 4.0
                  </p>
                    <div>Courses</div>
                    <ul class="list-group">
                      <li class="list-group-item">DB1101 - Basic SQL</li>
                      <li class="list-group-item">CS2011 - Java Introduction</li>
                    </ul>
                </div>
              </li>
            </ul>
          </div>
          <!-- SKILLS -->
          <div class="box">
            <h2><i class="fa fa-tasks ico"></i> Skills</h2>
            <div class="skills clearfix">
              <div class="item-skills">
                  Web Development
                  <span class="skill-level">Master</span>
              </div>
              <div class="col-sm-offset-1 col-sm-12 clearfix">
                <span class= "skill badge">HTML</span>
                <span class= "skill badge">CSS</span>
                <span class= "skill badge">Javascript</span>
              </div>
            </div>
            <div class="skills clearfix">
              <div class="item-skills">
                  Compression
                  <span class="skill-level">Master</span>
              </div>
              <div class="col-sm-offset-1 col-sm-12 clearfix">
                <span class= "skill badge">Mpeg</span>
                <span class= "skill badge">MP4</span>
                <span class= "skill badge">GIF</span>
              </div>
            </div>
          </div>
          <!-- PUBLICATIONS -->
          <div class="box">
            <h2><i class="fa fa-book ico"></i> Publications</h2>
            <div class="publication panel panel-default">
              <div class="panel-heading">
                <div class="name panel-title">Video compression for 3d media</div>
              </div>
              <div class="panel-body">
                <div class="publisher"><i class= "fa fa-bookmark ico"></i> Hooli</div>
                <div class="year">01 October  2014</div>
                <div class="address">
                  <a href="http:&#x2F;&#x2F;en.wikipedia.org&#x2F;wiki&#x2F;Silicon_Valley_(TV_series)" target= "_blank"><i class="fa fa-globe ico"></i> http:&#x2F;&#x2F;en.wikipedia.org&#x2F;wiki&#x2F;Silicon_Valley_(TV_series)</a>
                </div>
                <p>Innovative middle-out compression algorithm that changes the way we store data.</p>
              </div>
            </div>
          </div>
          <!-- LANGUAGES -->
          <div class="box">
            <h2><i class="fa fa-language ico"></i> Languages</h2>
            <ul class="list-group">
              <li class=" list-group-item">English<span class="skill badge pull-right">Native speaker</span></li>
            </ul>
          </div>
          <!-- HOBBIES -->
          <div class="box">
            <h2><i class="fa fa-heart ico"></i> Interests</h2>
            <div class="interests clearfix">
              <div class="item-interests">
                  Wildlife
              </div>
              <div class="col-sm-offset-1 col-sm-12 clearfix">
                <span class= "interest badge">Ferrets</span>
                <span class= "interest badge">Unicorns</span>
              </div>
            </div>
          </div>
          <div class="box">
            <h2><i class= "fa fa-check-square ico"></i> References</h2>
            <blockquote>
              <div>It is my pleasure to recommend Richard, his performance working as a consultant for Main St. Company proved that he will be a valuable addition to any company.</div>
              <footer>
                <a href="" target= "_blank">Erlich Bachman</a>
              </footer>
            </blockquote><br>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
