 
<!doctype html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="RdwVBFBS-CNOqANjqOIBnl8dNvVPFm_-SrFjBotDp3o" /> 
  <meta name="google-adsense-account" content="ca-pub-9730443148505458">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="author" content="Foozaweb Tech">
  <link rel="shortcut icon" href="https://mvbible.cc/img/logo.png">
  <meta name="keywords" content="Bible app, offline Bible, Bible study, KJV, NIV, ESV, audio Bible, AI Bible tools, daily devotional, sermon generator, Bible commentary, Bible for pastors, Bible reading plan, Bible dictionary, Strong's Concordance, verse of the day, Bible prayer app" />
  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Multiverse Bible — Documentation</title>
  <meta name="description" content="Official Multiverse Bible user manual and how-to guide." />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#f6fbff;
      --panel:#ffffff;
      --muted:#6b7280;
      --blue-600:#1fc5fc;
      --blue-700:#0babc5;
      --accent:var(--blue-600);
      --max-width:1100px;
      --radius:10px;
      --sidebar-w:300px;
    }
    *{box-sizing:border-box}
    html,body{height:100%;}
    body{
      margin:0;
      font-family:Inter,system-ui,Segoe UI,Roboto,"Helvetica Neue",Arial;
      background:var(--bg);
      color:#0f172a;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    /* Header */
    .topbar{
      display:flex;
      align-items:center;
      gap:16px;
      background:linear-gradient(90deg,var(--blue-700),var(--blue-600));
      color:white;
      padding:14px 20px;
      box-shadow:0 2px 8px rgba(11,102,255,0.12);
    }
    .brand{
      display:flex;
      align-items:center;
      gap:12px;
    }
    .brand .logo{
      width:44px;height:44px;border-radius:8px;background:white;display:flex;align-items:center;justify-content:center;
      color:var(--blue-700);font-weight:700;font-size:18px;
    }
    .brand h1{margin:0;font-size:1.05rem;letter-spacing:0.1px}
    .topbar .actions{margin-left:auto;display:flex;gap:10px;align-items:center}
    .topbar .url{opacity:.9;font-size:.9rem;background:rgba(255,255,255,0.08);padding:6px 10px;border-radius:6px}

    /* Layout */
    .wrapper{max-width:calc(var(--max-width) + var(--sidebar-w));margin:24px auto;display:flex;gap:20px;padding:0 16px;}
    nav.sidebar{
      width:var(--sidebar-w);
      min-width:var(--sidebar-w);
      background:var(--panel);
      border-radius:var(--radius);
      padding:14px;
      box-shadow:0 6px 18px rgba(6,24,44,0.06);
      height:calc(100vh - 120px);
      position:sticky;top:60px;overflow:auto;
    }
    nav.sidebar h2{font-size:.95rem;margin:0 0 12px 0;color:var(--blue-700)}
    .nav-search{display:flex;gap:8px;margin-bottom:12px}
    .nav-search input{flex:1;padding:8px 10px;border:1px solid #e6eefc;border-radius:8px}
    .toc{list-style:none;padding:0;margin:0}
    .toc li{margin:6px 0}
    .toc a{display:block;padding:8px;border-radius:8px;color:#0f172a;text-decoration:none;font-size:.95rem}
    .toc a:hover{background:#f0f7ff;color:var(--accent)}
    .toc a.active{background:linear-gradient(90deg,rgba(11,102,255,0.06),rgba(11,102,255,0.02));border-left:3px solid var(--accent);padding-left:12px}

    /* Content */
    main.docs{
      flex:1;
      max-width:var(--max-width);
      background:transparent;
      min-height:60vh;
    }
    .card{
      background:var(--panel);
      border-radius:var(--radius);
      padding:20px;
      margin-bottom:20px;
      box-shadow:0 6px 18px rgba(6,24,44,0.04);
    }
    .page-title{display:flex;align-items:center;gap:12px;margin-bottom:8px}
    .page-title h2{margin:0;font-size:1.2rem}
    .intro{color:var(--muted);margin-bottom:18px}

    /* Section (collapsible how-to) */
    .feature {
      border-top:1px solid #eef6ff;
      padding:18px 0;
    }
    .feature:first-of-type{border-top:0;padding-top:0}
    .feature h3{
      margin:0;font-size:1.02rem;display:flex;align-items:center;justify-content:space-between;cursor:pointer;
      gap:12px;
    }
    .feature h3 .title-left{display:flex;gap:12px;align-items:center}
    .feature p.desc{margin:10px 0;color:var(--muted)}
    .feature .body{display:none;margin-top:12px;color:#123;}
    .feature.open .body{display:block}
    .feature .howto{background:#f8fbff;padding:14px;border-radius:8px;border:1px solid #e7f0ff}
    .kbd{background:#eef6ff;padding:4px 8px;border-radius:6px;font-weight:600;color:var(--blue-700);font-size:0.9rem}

    /* Screenshot placeholder */
    .screenshot{
      margin-top:12px;border-radius:8px;border:1px dashed #dbeafe;padding:10px;background:linear-gradient(180deg, #ffffff, #fbfdff);
      min-height:140px;display:flex;align-items:center;justify-content:center;color:var(--muted)
    }
    .screenshot img{
        max-height:400px;
    }

    /* Responsive */
    @media (max-width: 980px){
      .wrapper{flex-direction:column;padding:0 12px}
      nav.sidebar{width:100%;min-width:unset;height:auto;position:relative;top:0;display:none}
      nav.sidebar.open{display:block}
      .topbar .url{display:none}
    }

    /* Footer */
    footer{max-width:var(--max-width);margin:18px auto;color:var(--muted);font-size:0.9rem;padding:0 16px}
    a.link{color:var(--accent);text-decoration:none}
    .muted{color:var(--muted)}
    /* small helpers */
    .muted-block{background:#fbfdff;border-radius:8px;padding:10px;border:1px solid #eef6ff;color:var(--muted)}
    .pill{display:inline-block;padding:6px 10px;border-radius:999px;background:rgba(11,102,255,0.09);color:var(--blue-700);font-weight:600}
  </style>
</head>
<body>
  <header class="topbar">
    <div class="brand">
      <div class="logo"><img src="https://mvbible.cc/img/logo.png" alt="Multiverse Bible Logo" style="max-height:40px;" /></div>
      <div>
        <div style="font-size:0.95rem;font-weight:700">Multiverse Bible</div>
        <div style="font-size:0.82rem;opacity:0.9">Help Center — Official Documentation</div>
      </div>
    </div>

    <div class="actions">
      <div class="url">mvbible.cc</div>
      <button id="menuBtn" style="background:transparent;border:0;color:white;padding:8px;border-radius:6px;display:none">☰</button>
    </div>
  </header>

  <div class="wrapper">
    <nav class="sidebar" id="sidebar">
      <h2>Documentation</h2>

      <div class="nav-search">
        <input id="searchInput" placeholder="Search features (try 'AI', 'highlight')" aria-label="Search help topics" />
      </div>

      <ul class="toc" id="toc">
        <!-- Top-level anchors — keep these in sync with section ids -->
        <li><a href="#getting-started" class="toc-link active">Getting Started</a></li>
        <li><a href="#ai-tools" class="toc-link">AI Tools</a></li>
        <li><a href="#audio-notes" class="toc-link">Audio & Notes</a></li>
        <li><a href="#study-tools" class="toc-link">Study Tools</a></li>
        <li><a href="#reading-features" class="toc-link">Reading & UI</a></li>
        <li><a href="#community" class="toc-link">Community & Backup</a></li>
        <li><a href="#special" class="toc-link">Special Features</a></li>
        <li><a href="#faq" class="toc-link">FAQ & Troubleshooting</a></li>
      </ul>

      <div style="height:16px"></div>
      <div class="muted" style="font-size:0.9rem">Need help? <br> Email <a class="link" href="mailto:multiversebible@hotmail.com">multiversebible@hotmail.com</a></div>
    </nav>

    <main class="docs" id="main">
      <!-- Getting Started -->
      <section id="getting-started" class="card">
        <div class="page-title">
          <h2>Getting Started</h2>
          <div class="pill">Official Guide</div>
        </div>
        <p class="intro">This guide explains every feature of Multiverse Bible and provides step-by-step instructions for common tasks. Use the left navigation to jump between sections. Screenshots placeholders are provided where you can upload images later.</p>

        <div class="feature open" data-keywords="install account setup">
          <h3>
            <div class="title-left"><strong>Install & First Launch</strong></div>
            <span class="muted">Quick steps</span>
          </h3>
          <div class="body">
            <p class="desc">Install Multiverse Bible from Google Play or the App Store, then sign in or continue as a guest.</p>
            <div class="howto">
              <ol>
                <li>Open the app store on your device and search for <strong>Multiverse Bible</strong>.</li>
                <li>Tap <em>Install</em> or <em>Get</em>. Wait for installation to complete.</li>
                <li>Open the app and follow the on-screen setup (language, preferred Bible version).</li>
                <li>Grant optional permissions (microphone for AI note taker, storage for backups).</li>
                <li>Tip: Create an account to enable cross-device backups and AI features.</li>
              </ol>
            </div>
            <div class="screenshot" aria-hidden="true"><img src="https://mvbible.cc/img/introduction.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="navigation home widget">
          <h3>
            <div class="title-left"><strong>Home Widget</strong></div>
            <span class="muted">Open the app quickly</span>
          </h3>
          <div class="body">
            <p class="desc">Add the Multiverse Bible widget to your device home screen for quick access to daily verses and your last reading position.</p>
            <div class="howto">
              <ol>
                <li>Long-press on your device home screen and choose <em>Widgets</em>.</li>
                <li>Find <strong>Multiverse Bible</strong> in the list and drag the widget to your home screen.</li>
                <li>Tap the widget to open the app directly to the configured view (Daily Verse / Last Read).</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/home_widget.jpeg"></div>
          </div>
        </div>
      </section>

      <!-- AI Tools -->
      <section id="ai-tools" class="card">
        <div class="page-title"><h2>AI Tools & Assistance</h2></div>
        <p class="intro">Multiverse Bible includes advanced AI tools for study, content generation, and daily reflection. Below are official how-to steps for each AI feature.</p>

        <div class="feature" data-keywords="character profile ai bible character profile">
          <h3>
            <div class="title-left"><strong>AI Generated Bible Character Profile</strong></div>
            <span class="muted">Profile and background</span>
          </h3>
          <div class="body">
            <p class="desc">Generate a concise, research-based character profile for any Bible character (biography, role, key verses, suggested readings).</p>
            <div class="howto">
              <ol>
                <li>Open the app tray and tap <strong>AI Tools > BibleCharacter Profiles</strong>.</li>
                <li>Search for a character name, e.g., <em>Moses</em> or <em>Mary</em>.</li>
                <li>Select the matching result and press <em>Profile Photo</em>.</li>
                <li>Use the options to include: timeline, key verses, theological notes, and related characters.</li>
              </ol>
            </div>
            <p class="muted">Placeholder: Add a screenshot of a generated profile.</p>
            <div class="screenshot"><img src="https://mvbible.cc/img/char_profile.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="sermon generator ai sermon">
          <h3>
            <div class="title-left"><strong>Sermon Generator</strong></div>
            <span class="muted">Create outlines & full messages</span>
          </h3>
          <div class="body">
            <p class="desc">Use AI to create sermon outlines, talking points, or full messages based on a selected passage, theme, or topic.</p>
            <div class="howto">
              <ol>
                <li>Go to <strong>AI Tools > Sermon Generator</strong>.</li>
                <li>Enter a scripture reference or topic (example: <em>John 3</em> or <em>Grace</em>).</li>
                <li>Choose length (short outline, sermonette, full sermon) and tone (expository, narrative, dev & application).</li>
                <li>Tap <em>Generate</em>. Review, edit, and export to Notes or share the draft.</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/sermon_generator.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="q&a bible assistant ai">
          <h3>
            <div class="title-left"><strong>Bible Q&amp;A Assistant</strong></div>
            <span class="muted">Ask biblical questions</span>
          </h3>
          <div class="body">
            <p class="desc">Ask context-aware questions (theology, history, cross-references) and receive concise, source-referenced answers.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>AI Tools > Ask Lysi</strong>.</li>
                <li>Type your question (e.g., “What does Romans 8 say about adoption?”) and press <em>Send</em>.</li>
                <li>Review the AI answer and view sourced verses provided beneath the response.</li>
                <li>Tip: Use follow-up prompts to refine answers (e.g., “Explain in simpler terms”).</li>
              </ol>
            </div>
            <!--<div class="screenshot"><img src="https://mvbible.cc/img/sermon_generator.png"></div>-->
          </div>
        </div>

        <div class="feature" data-keywords="daily reflection ai">
          <h3>
            <div class="title-left"><strong>Daily AI Reflections</strong></div>
            <span class="muted">Personalized devotion</span>
          </h3>
          <div class="body">
            <p class="desc">Receive daily reflections tailored to your recent reading and preferences. Reflections include a short devotional, action points, and a prayer starter.</p>
            <div class="howto">
              <ol>
                <li>Enable Daily Reflections in <strong>Settings > AI Tools</strong>.</li>
                <li>Customize your preferred style (brief, contemplative, application-focused).</li>
                <li>Each morning, open the app or enable push notifications to receive the reflection.</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Daily AI Reflection example]</div>-->
          </div>
        </div>

        <div class="feature" data-keywords="ai prayer assistant">
          <h3>
            <div class="title-left"><strong>AI Prayer Assistant</strong></div>
            <span class="muted">Craft prayers</span>
          </h3>
          <div class="body">
            <p class="desc">Generate prayer templates or personalized prayers based on a topic or a verse.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>AI Tools > Prayer Assistant</strong>.</li>
                <li>Enter a focus (gratitude, healing, guidance) and optionally a verse.</li>
                <li>Tap <em>Generate</em>, then edit or save to your Notes or Prayer Requests.</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Prayer Assistant]</div>-->
          </div>
        </div>

        <div class="feature" data-keywords="ask lysi ai lysi">
          <h3>
            <div class="title-left"><strong>Ask Lysi</strong></div>
            <span class="muted">Your spiritual AI companion</span>
          </h3>
          <div class="body">
            <p class="desc">Ask Lysi for study help, reading suggestions, or quick devotional prompts. Lysi remembers session context during a conversation.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>AI Tools > Ask Lysi</strong>.</li>
                <li>Type or speak a question. Use follow-ups to refine responses.</li>
                <li>Save useful responses to Notes or add them to a reading plan.</li>
                <li>-OR-</li>
                <li>Select a verse and click Ask Lysi</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/askLysi.jpeg"></div>
          </div>
        </div>

        <div class="feature" data-keywords="image generator bible image">
          <h3>
            <div class="title-left"><strong>Bible Image Generator</strong></div>
            <span class="muted">AI-created visuals</span>
          </h3>
          <div class="body">
            <p class="desc">Produce shareable images of Bible scenes or conceptual art using AI prompts. Follow community guidelines when generating imagery.</p>
            <div class="howto">
              <ol>
                <li>Go to <strong>AI Tools > Bible Art</strong>.</li>
                <li>Enter a clear prompt (e.g., “Noah’s Ark at sunset, cinematic, oil painting style”).</li>
                <li>Choose aspect ratio and press <em>Generate</em>. Tap an image to save or share.</li>
                <li>-OR-</li>
                <li>Select a verse and click AI Image</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/ai_image2.jpeg"></div>
          </div>
        </div>

      </section>

      <!-- Audio & Notes -->
      <section id="audio-notes" class="card">
        <div class="page-title"><h2>Audio & Notes</h2></div>
        <p class="intro">Multiverse Bible provides robust audio playback and note-taking experiences — including recording, sharing, and AI-assisted transcription (iOS).</p>

        <div class="feature" data-keywords="audio bible tts highlight">
          <h3>
            <div class="title-left"><strong>Audio Bible (TTS)</strong></div>
            <span class="muted">Read aloud with verse highlighting</span>
          </h3>
          <div class="body">
            <p class="desc">Use the built-in TTS to read chapters or selected verses while the app highlights the current verse.</p>
            <div class="howto">
              <ol>
                <li>Open a chapter and tap the <kbd class="kbd">Play</kbd> icon to start TTS playback.</li>
                <li>To read selected verses only: select verses (long-press or tap selection mode) and tap <kbd class="kbd">Play Icon</kbd>.</li>
                <li>While reading, the current verse is highlighted. Use <em>Pause</em> or <em>Stop</em> to control playback.</li>
                <li>Use the Floating Icon button on bottom right to change voice and speed </li>
              </ol>
            </div>
            <p class="muted">Troubleshooting: If highlighting is out of sync, ensure you have the latest app version and that TTS progress is enabled in Settings &gt; Accessibility.</p>
            <div class="screenshot"><img src="https://mvbible.cc/img/highlighting.jpeg"> <img src="https://mvbible.cc/img/tts.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="built-in recorder record audio">
          <h3>
            <div class="title-left"><strong>Built-in Audio Recorder</strong></div>
            <span class="muted">Record sermons and notes</span>
          </h3>
          <div class="body">
            <p class="desc">Record audio directly in the app. Files can be attached to notes, exported, or stored in backups.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>Note taker</strong> from the app tray icon.</li>
                <li>Tap <em>Record</em> to start; tap again to stop. Give the recording a title.</li>
                <li>Attach the recording to a Note or export via Share.</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/recorder.jpg"></div>
          </div>
        </div>

        <div class="feature" data-keywords="share notes share audio import">
          <h3>
            <div class="title-left"><strong>Share Notes & Audio to the App</strong></div>
            <span class="muted">Import from other apps</span>
          </h3>
          <div class="body">
            <p class="desc">Use the platform share sheet to import text notes or audio files into Multiverse Bible.</p>
            <div class="howto">
              <ol>
                <li>From another app, choose <em>Share</em> and select <strong>Multiverse Bible</strong>.</li>
                <li>Choose <em>Import as Note</em> or <em>Import Audio</em> and follow the prompts.</li>
              </ol>
            </div>
            <!--<div class="screenshot"><img src="https://mvbible.cc/img/recorder.jpg"></div>-->
          </div>
        </div>

        <div class="feature" data-keywords="ai note taker transcription ios"> 
          <h3>
            <div class="title-left"><strong>AI Note Taker (iOS only)</strong></div>
            <span class="muted">Automatic transcription & summary</span>
          </h3>
          <div class="body">
            <p class="desc">On iOS, let the AI listen during sermons or study sessions and generate structured notes with timestamps.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>Notes</strong> &gt; select <em>AI Note Taker Icon</em>.</li>
                <li>Grant microphone permissions. Tap <em>Start Listening</em> and begin your talk or sermon.</li>
                <li>Tap <em>Stop</em>. The AI will transcribe and present a summary you can edit and save.</li>
              </ol>
            </div>
            <p class="muted">Placeholder: AI note taker uses your deffault phone language</p>
            <div class="screenshot"><img src="https://mvbible.cc/img/ai_note_taker.jpg"></div>
          </div>
        </div>

      </section>

      <!-- Study Tools -->
      <section id="study-tools" class="card">
        <div class="page-title"><h2>Study Tools & Search</h2></div>
        <p class="intro">Tools to deepen Bible study: search, compare translations, Strong's dictionary, cross-references, and more.</p>

        <div class="feature" data-keywords="search keyword enhanced search">
          <h3>
            <div class="title-left"><strong>Enhanced Bible Keyword Search</strong></div>
            <span class="muted">Find verses and topics quickly</span>
          </h3>
          <div class="body">
            <p class="desc">Search supports phrase search, filters (book, testament, version), and result ranking by relevance.</p>
            <div class="howto">
              <ol>
                <li>Tap the Search icon from the top bar.</li>
                <li>Enter your keywords or phrase. Use quotes for exact match (e.g., "living water").</li>
                <li>Filter results by Book, Testament, or Version using the <em>Filters</em> button.</li>
                <li>Tap a result to view the verse in context. Use the <em>Save</em> icon to add to Notes or Highlights.</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/search.jpg"></div>
          </div>
        </div>

        <div class="feature" data-keywords="compare translations split-screen">
          <h3>
            <div class="title-left"><strong>Compare Translations & Split-Screen</strong></div>
            <span class="muted">Side-by-side reading</span>
          </h3>
          <div class="body">
            <p class="desc">Open multiple translations side-by-side or compare any two verses and translations.</p>
            <div class="howto">
              <ol>
                <li>Open a verse and tap <em>Compare</em>.</li>
                <li>Select the secondary translation to view side-by-side.</li>
                <li>Use <em>Split-Screen</em> mode to keep notes or commentaries visible while you read.</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/split_screen.jpg"></div>
          </div>
        </div>

        <div class="feature" data-keywords="strongs dictionary concordance cross references">
          <h3>
            <div class="title-left"><strong>Strong’s Dictionary & Cross-References</strong></div>
            <span class="muted">Original-language insight</span>
          </h3>
          <div class="body">
            <p class="desc">Tap any word (where available) to view Strong’s definitions, lemma, and related verses.</p>
            <div class="howto">
              <ol>
                <li>Open app Settigns</li>
                <li>Choose <em>Bible with Strong’s</em> to open definitions and lexical entries.</li>
                <li>Use cross-references to jump to related verses and study notes.</li>
                <li>Open App tray to use Strongs Dictionary Directly</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/strong_ui.jpeg"><img src="https://mvbible.cc/img/strong_detail.jpeg"><br>
            <img src="https://mvbible.cc/img/cross_ui.jpg"><img src="https://mvbible.cc/img/cross_detail.jpg"></div>
          </div>
        </div>
        
        <div class="feature" data-keywords="comment on bible verse">
          <h3>
            <div class="title-left"><strong>Comment on Bible Verses</strong></div>
            <span class="muted">Verse Comments</span>
          </h3>
          <div class="body">
            <p class="desc">Select a verse and drop a comment </p>
            <div class="howto">
              <ol>
                <li>Slide the desired verse from left to right.</li>
                <li>Click comment.</li>
                <li>Enter comment and click save</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/comment.jpg"></div>
          </div>
        </div>

      </section>

      <!-- Reading & UI -->
      <section id="reading-features" class="card">
        <div class="page-title"><h2>Reading & UI Features</h2></div>
        <p class="intro">Customization options for the reading experience: highlights, themes, reading plans, and accessibility.</p>

        <div class="feature" data-keywords="highlights color highlight text">
          <h3>
            <div class="title-left"><strong>Highlights</strong></div>
            <span class="muted">Mark and recall verses</span>
          </h3>
          <div class="body">
            <p class="desc">Add colored highlights to verses and manage them from the Highlights section.</p>
            <div class="howto">
              <ol>
                <li>Select a verse or verses (tap to open selection mode).</li>
                <li>Tap the <kbd class="kbd">Highlight</kbd> icon on top right and choose a color.</li>
                <li>To remove a highlight, reselect the verse and tap the highlight icon again.</li>
                <li>Manage all highlights in <em>App drawer &gt; Highlights</em>.</li>
              </ol>
            </div>
            <p class="muted">Tip: For readable text, Multiverse Bible automatically selects white or black text depending on highlight color contrast.</p>
            <div class="screenshot"><img src="https://mvbible.cc/img/highlight1.png"><img src="https://mvbible.cc/img/highlight2.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="reading plans daily verses bible plans">
          <h3>
            <div class="title-left"><strong>Reading Plans & Daily Verse</strong></div>
            <span class="muted">Stay on track</span>
          </h3>
          <div class="body">
            <p class="desc">Follow curated reading plans and receive daily verses or reminders.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>Plans</strong> and browse categories (Topical, Chronological, One-Year).</li>
                <li>Subscribe to a plan to add it to your dashboard.</li>
                <li>Enable daily reminders in Settings to receive notifications.</li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/reading_plan.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="dark mode themes fonts accessibility"> 
          <h3> 
            <div class="title-left"><strong>Dark Mode & Themes</strong></div>
            <span class="muted">Customize your look</span>
          </h3>
          <div class="body">
            <p class="desc">Switch between light/dark themes and choose font sizes or themes for readability.</p>
            <div class="howto">
              <ol>
                <li>Open Settings &gt; App Theme.</li>
                <li>App <strong>App Theme Icon</strong> to toggle betweek light/dark theme and select preferred font size.</li>
                <!--<li>Children’s Mode provides simplified UI and larger text for kids.</li>-->
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/theme_mode.jpg"><img src="https://mvbible.cc/img/theme_mode2.png"></div>
          </div>
        </div>

      </section>

      <!-- Community & Backup -->
      <section id="community" class="card">
        <div class="page-title"><h2>Community, Backup & Export</h2></div>
        <p class="intro">Keep your data safe and connect with other users through prayer requests and community features.</p>

        <div class="feature" data-keywords="backup restore google drive icloud">
          <h3>
            <div class="title-left"><strong>Full Data Backup & Restore</strong></div>
            <span class="muted">Google Drive & iCloud</span>
          </h3>
          <div class="body">
            <p class="desc">Backup notes, highlights, and settings to cloud storage and restore them on a new device.</p>
            <div class="howto">
              <ol>
                <li>Open Settings &gt; Backup and Restore.</li>
                <li>Choose backup destination (Google Drive on Android, iCloud on iOS).</li>
                <li>Tap <strong>Backup</strong>. To restore, select a backup file and tap <strong>Restore</strong>.</li>
                <lt>To include audio recordings to backup, check <strong>Backup Recordings</strong></lt>
                <li>To Manage backup files and recordings, click <strong>Storage</strong></li>
              </ol>
            </div>
            <div class="screenshot"><img src="https://mvbible.cc/img/backup_restore.png"></div>
          </div>
        </div>

        <div class="feature" data-keywords="community prayer requests points badges">
          <h3>
            <div class="title-left"><strong>Community & Prayer Requests</strong></div>
            <span class="muted">Connect with others</span>
          </h3>
          <div class="body">
            <p class="desc">Share prayer requests, comment on verses, and earn badges for participation.</p>
            <div class="howto">
              <ol>
                <li>Open Community from the navigation</li>
                <li>Post a prayer request or join a discussion thread.</li>
                <li>Earn points for reading and participating in the community leaderboard.</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Community UI]</div>-->
          </div>
        </div>

      </section>

      <!-- Special Features -->
      <section id="special" class="card">
        <div class="page-title"><h2>Special Features</h2></div>
        <p class="intro">Unique capabilities that distinguish Multiverse Bible.</p>

        <div class="feature" data-keywords="nearby churches">
          <h3>
            <div class="title-left"><strong>Nearby Churches</strong></div>
            <span class="muted">Find local congregations</span>
          </h3>
          <div class="body">
            <p class="desc">Discover churches near your location and view service times and contact info.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>Nearby Churches</strong> and allow location permissions.</li>
                <li>Browse results on the map or switch to list view.</li>
                <li>Tap a church to view details and directions.</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Nearby Churches map]</div>-->
          </div>
        </div>

        <div class="feature" data-keywords="words of jesus red">
          <h3>
            <div class="title-left"><strong>Words of Jesus in Red</strong></div>
            <span class="muted">Immediate recognition</span>
          </h3>
          <div class="body">
            <p class="desc">Enable this option to display the words of Jesus in red text for easier reading.</p>
            <div class="howto">
              <ol>
                <li>Open Settings &gt; App Data &gt; Red Letter verses</li>
                <li>Enable <strong>Words of Jesus in Red</strong>.</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Words of Jesus in Red]</div>-->
          </div>
        </div>

        <div class="feature" data-keywords="salvation guide">
          <h3>
            <div class="title-left"><strong>Salvation Guide</strong></div>
            <span class="muted">Guidance for new believers</span>
          </h3>
          <div class="body">
            <p class="desc">A quick guide to salvation.</p>
            <div class="howto">
              <ol>
                <li>Open <strong>More &gt; Salvation</strong>.</li>
                <li>Follow the guided steps and resources for spiritual growth.</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Salvation Guide]</div>-->
          </div>
        </div>
        
        <div class="feature" data-keywords="share bible verse">
          <h3>
            <div class="title-left"><strong>Share Verse, Bookmark and Select</strong></div>
            <span class="muted">Take Quick Action on Verse</span>
          </h3>
          <div class="body">
            <p class="desc">Open Bible UI to access verses</p>
            <div class="howto">
              <ol>
                <li>Slide desired verse to <strong>Right</strong> or <strong>Left</strong>.</li>
                <li>Click Share to share</li>
                <li>Click Select to select verse and enable multi-selection</li>
                <li>Click Bookmark to bookmark verse. To remove bookmark, repeat this process</li>
              </ol>
            </div>
            <!--<div class="screenshot">[Upload screenshot: Salvation Guide]</div>-->
          </div>
        </div>

       

      </section>

      <!-- FAQ -->
      <section id="faq" class="card">
        <div class="page-title"><h2>FAQ & Troubleshooting</h2></div>
        <p class="intro">Common issues and solutions.</p>

        <div class="feature" data-keywords="tts not working highlight sync">
          <h3><div class="title-left"><strong>TTS will not stop / plays too long</strong></div><span class="muted">Stop behaviour</span></h3>
          <div class="body">
            <div class="howto">
              <ol>
                <li>Tap the <kbd class="kbd">Stop</kbd> button inside the Audio controls. If audio continues, force-stop the app and reopen.</li>
                <li>Check Settings &gt; Accessibility &gt; TTS to ensure the system TTS is functioning correctly.</li>
                <li>If you experience repeated issues, update the app from the store and report via <a href="mailto:multiversebible@hotmail.com">multiversebible@hotmail.com</a>.</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="feature" data-keywords="backup restore fails">
          <h3><div class="title-left"><strong>Backup / Restore Issues</strong></div><span class="muted">Backup troubleshooting</span></h3>
          <div class="body">
            <div class="howto">
              <ol>
                <li>Ensure you are signed into the correct Google or Apple account before restoring.</li>
                <li>Confirm the backup file exists in your cloud storage and is complete.</li>
                <li>When restoring, ensure you have a stable internet connection and enough local storage.</li>
              </ol>
            </div>
          </div>
        </div>
        
        <!-- 🟦 Icons – Backup troubleshooting -->
        <div class="feature" data-keywords="icons backup troubleshooting">
          <h3>
            <div class="title-left"><strong>Icons</strong></div>
            <span class="muted">Icons troubleshooting</span>
          </h3>
          <div class="body">
            <div class="howto">
              <ol>
                <li>Go to <strong>App Settings</strong>.</li>
                <li>Tap <strong>Refresh</strong>.</li>
                <li>Wait a few minutes for the icons to reload properly.</li>
              </ol>
            </div>
          </div>
        </div>

      </section>

    </main>
  </div>

  <footer>
    <div style="max-width:var(--max-width);margin:0 auto;display:flex;justify-content:space-between;align-items:center;padding:10px 16px">
      <div>Multiverse Bible © <?php echo date('Y'); ?> • <a class="link" href="https://mvbible.cc" target="_blank">mvbible.cc</a></div>
      <div class="muted">Documentation — Official</div>
    </div>
  </footer>

  <script>
    // Sidebar toggle for mobile
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    menuBtn.addEventListener('click', () => sidebar.classList.toggle('open'));

    // Show menuBtn only on small screens
    function refreshMenuBtn(){
      if(window.innerWidth <= 980){
        menuBtn.style.display = 'inline-block';
      } else {
        menuBtn.style.display = 'none';
        sidebar.classList.remove('open');
      }
    }
    window.addEventListener('resize', refreshMenuBtn);
    refreshMenuBtn();

    // Collapsible features
    document.querySelectorAll('.feature h3').forEach(h => {
      h.addEventListener('click', () => {
        const f = h.parentElement;
        f.classList.toggle('open');
      });
    });

    // Scrollspy & TOC behavior
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = Array.from(document.querySelectorAll('main.docs section'));
    function setActiveToc(){
      const scrollY = window.scrollY + 120; // header offset
      let currentId = sections[0].id;
      for (const sec of sections){
        if (sec.offsetTop <= scrollY) currentId = sec.id;
      }
      tocLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#'+currentId));
    }
    window.addEventListener('scroll', setActiveToc);
    setActiveToc();

    // Simple search for sidebar
    const searchInput = document.getElementById('searchInput');
    const features = Array.from(document.querySelectorAll('.feature'));
    searchInput.addEventListener('input', (e) => {
      const q = e.target.value.toLowerCase().trim();
      if (!q) {
        features.forEach(f => f.style.display = '');
        return;
      }
      features.forEach(f => {
        const text = (f.textContent || '').toLowerCase();
        f.style.display = text.includes(q) ? '' : 'none';
      });
    });

    // Smooth in-page links
    document.querySelectorAll('.toc a').forEach(a => {
      a.addEventListener('click', (ev) => {
        ev.preventDefault();
        const id = a.getAttribute('href').substring(1);
        const el = document.getElementById(id);
        if (el) window.scrollTo({top: el.offsetTop - 90, behavior:'smooth'});
      });
    });

    // Keyboard accessibility: toggle feature with Enter / Space
    document.querySelectorAll('.feature h3').forEach(h => {
      h.setAttribute('tabindex', '0');
      h.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); h.click(); }
      });
    });
  </script>
</body>
</html>
