---
layout: default
title: An online combat experience like no other
subtitle: Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
hero_size: large
calls_to_action:
  - text: Sign up today
    link: /enlist
    type: primary
  - text: More info
    link: /about
    type: secondary
---

The 29th Infantry Division is a realism unit spread throughout multiple games in multiple time periods. Each game is supported separately by different companies while serving under the same Battalion so that all games and soldiers function individually and as all whole.

Realism is the conducting of a gaming group as close to real combat as possible.

Above, you will find our primary navigation menu with five links on it. For each of the links, a submenu is provided on the left of the page with related links.

For more information about the 29th, read our [About](/about) page.

<section class="posts">
  <div class="row row-cols-1 row-cols-md-3">
  {% for post in site.posts %}
    <div class="col mb-4">
      <div class="card">
        <img src="{{ post.image }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">
            <a href="{{ post.url }}">
              {{ post.title }}
            </a>
          </h5>
          <p class="card-text">{{ post.excerpt }}</p>
          <p class="card-text"><small class="text-muted">{{ post.date }}</small></p>
        </div>
      </div>
    </div>
  {% endfor %}
  </div>
</section>
