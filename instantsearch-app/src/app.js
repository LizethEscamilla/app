const { algoliasearch, instantsearch } = window;

const searchClient = algoliasearch(
  'DVCPPXQNS5',
  '2932aa98452c7760e2526917c74c470e'
);

const search = instantsearch({
  indexName: 'trainers',
  searchClient,
  future: { preserveSharedStateOnUnmount: true },
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: '#searchbox',
  }),
  instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item: (hit, { html, components }) => html`
        <article>
          <img src=${hit.avatar} alt=${hit.name} />
          <div>
            <h1>${components.Highlight({ hit, attribute: 'name' })}</h1>
            <p>${components.Highlight({ hit, attribute: 'apellido' })}</p>
            <p>${components.Highlight({ hit, attribute: 'id' })}</p>
          </div>
        </article>
      `,
    },
  }),
  instantsearch.widgets.configure({
    hitsPerPage: 8,
  }),
  instantsearch.widgets.pagination({
    container: '#pagination',
  }),
]);

search.start();
